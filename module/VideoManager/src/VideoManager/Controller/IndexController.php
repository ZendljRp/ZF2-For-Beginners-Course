<?php

namespace VideoManager\Controller;

use VideoManager\Tables\VideoTable;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    protected $videoTable;

    public function __construct(VideoTable $videoTable)
    {
        $this->videoTable = $videoTable;
    }

    public function indexAction()
    {
        $view = new ViewModel(array(
            'music' => 'rock',
            'artist' => 'pearl jam'
        ));

        $view->setVariable('socialMedia', 'Google+');

        $view->setVariables(array(
            'networks' => array(
                'Twitter', 'Google+', 'LinkedIn', 'Facebook'
            ),
            'car' => 'Porsche 911',
            'records' => $this->videoTable->fetchMostRecent()
        ));

        return $view;
    }

    public function deleteAction()
    {
        $this->layout('video-layout');

        return new ViewModel();
    }

    public function viewAction()
    {
        return new ViewModel();
    }

    public function searchAction()
    {
        return new ViewModel();
    }

    public function manageAction()
    {
        return new ViewModel();
    }


}

