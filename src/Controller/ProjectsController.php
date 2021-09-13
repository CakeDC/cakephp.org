<?php

namespace App\Controller;

use Cake\Event\EventInterface;
use Showcase\Model\Table\ProjectsTable;

/**
 * Projects Controller
 *
 * @property ProjectsTable $Projects
 */
class ProjectsController extends AppController
{
    public function beforeFilter(EventInterface $event)
    {
        $this->Auth->allow();

        return parent::beforeFilter($event);
    }

    public function index()
    {
        $this->set('highlights', $this->Projects->getHighlights('highlights'));
        $this->set('projects', $this->Projects->find('showcase'));
    }

    public function view($slug)
    {
        $this->set('project', $this->Projects->where(['slug' => $slug])->firstOrFail());
    }
}
