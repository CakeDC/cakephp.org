<?php

namespace App\Model\Table;

class ScreenMonitorImagesTable extends UploadedFilesTable
{
    /**
     * Initilize
     *
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->addBehavior('Josegonzalez/Upload.Upload', [
            'file' => [
                'path' => 'webroot{DS}files{DS}{model}{DS}{field}{DS}{microtime}',
                'transformer' => 'App\File\Transformer\GenerateDifferentVersionsTransformer',
            ],
        ]);

        $this->belongsTo('Projects', [
            'foreignKey' => 'entity_id',
            'conditions' => ['model' => 'ScreenMonitorImages'],
        ]);
    }
}
