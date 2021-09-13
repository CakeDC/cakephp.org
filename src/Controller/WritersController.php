<?php

namespace App\Controller;

use App\Model\Table\WritersTable;
use Cake\Core\Configure;
use Cake\Event\EventInterface;
use Cake\Mailer\Email;
use Cake\Network\Response;
use ReCaptcha\ReCaptcha;

/**
 * Writers Controller
 *
 * @property WritersTable $Writers
 */
class WritersController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        return parent::beforeFilter($event);
    }

    /**
     * Index method
     *
     * @return Response|null
     */
    public function index()
    {
        $writer = $this->Writers->newEmptyEntity();

        if (Configure::read('Site.writers_form_enabled') && $this->request->is('post')) {
            $recaptcha = new ReCaptcha(Configure::read('ReCaptcha.secret_key'));
            $resp = $recaptcha->verify($this->request->data('g-recaptcha-response'), $this->request->clientIp());
            if ($resp->isSuccess()) {
                $writer = $this->Writers->newEntity($this->request->getData());
                $writer->client_ip = $this->request->clientIp();
                if ($this->Writers->save($writer)) {
                    $email = new Email('default');
                    $email
                        ->setEmailFormat('text')
                        ->setReplyTo($writer->email, $writer->name)
                        ->setFrom([Configure::read('Site.contact.marketing_email') => __('CakePHP Website')])
                        ->setTo(Configure::read('Site.contact.marketing_email'))
                        ->setSubject(__('Writers Form'))
                        ->set(compact('writer'))
                        ->setTemplate('writers_form')
                        ->send();

                    $this->Flash->success(__('Thanks for your submission! We will review and get back to you shortly!'));

                    return $this->redirect(['action' => 'index']);
                }
            } else {
                $this->Flash->error(__('Please check your Recaptcha Box.'));
            }
        }

        $this->set(compact('writer'));
    }
}
