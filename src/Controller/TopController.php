<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

class TopController extends AppController
{

	public function initialize(){
		parent::initialize();
		//タイトルセット
		$this->set('title', 'TopPage');
		//レイアウト読み込み
		$this->viewBuilder()->layout('Top');


	}

	public function index()
	{
	}
}
