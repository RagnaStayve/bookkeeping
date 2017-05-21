<?php

namespace App\Controller;

use Cake\Core\Configure;
use Cake\Network\Exception\ForbiddenException;
use Cake\Network\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;
use App\Controller\AppController;

class PaymentController extends AppController
{

	public function initialize(){
		parent::initialize();
		//タイトルセット
		$this->set('title', 'TopPage');
		//レイアウト読み込み
		$this->viewBuilder()->layout('payment');

	}

	public function add()
	{
		$this->set('title', 'PaymentAdd');
		$this->viewBuilder()->layout('Top');
		$this->set('close', null);

		if ($this->request->is('post')) {
			//paymentテーブルの読み込み
			$this->loadModel('payment');

			$post = [
				'payment_date' => date('Y-m-d', strtotime($this->request->data('payment_date'))),
				'payment_price' => $this->request->data('payment_price'),
				'income_flg' => $this->request->data('income_flg'),
				'payment_memo' => $this->request->data('payment_memo')
			];

			if ($post['income_flg'] == 'on'){
				$post['income_flg'] = true;
			} else {
				$post['income_flg'] = false;
			}

			if ($this->request->data('payment_date') != null) {
				$this->payment->query()->
					insert(['payment_date', 'payment_price', 'income_flg', 'payment_memo'])
					->values([
						'payment_date' => $post['payment_date'],
						'payment_price' => $post['payment_price'],
						'income_flg' => $post['income_flg'],
						'payment_memo' => $post['payment_memo']
					])
					->execute();
				$this->Flash->error('登録成功');
			} else {
				$this->Flash->error('登録失敗');
			}
		}

	}

	public function income()
	{
		$this->set('title', 'incomeRecord');

		//paymentテーブルの読み込み
		$this->loadModel('payment');

		$whereConditions = ['and' => [
				['income_flg' => true]
			]
		];
		$order = (['payment_date' => 'ASC']);

		//SELECTのSQL文オブジェクト
		$sqlObject = $this->payment->find()
			->order($order)
			->where($whereConditions);

		//$recordsに検索結果をセットする
		$this->set('records', $sqlObject->all());

	}

	public function expenses()
	{
		$this->set('title', 'ExpensesRecord');

		//paymentテーブルの読み込み
		$this->loadModel('payment');

		$whereConditions = ['and' => [
				['income_flg' => false]
			]
		];
		$order = (['payment_date' => 'ASC']);

		//SELECTのSQL文オブジェクト
		$sqlObject = $this->payment->find()
			->order($order)
			->where($whereConditions);

		//$recordsに検索結果をセットする
		$this->set('records', $sqlObject->all());

	}

	public function all(){
		$this->set('title', 'PaymentAll');

		//paymentテーブルの読み込み
		$this->loadModel('payment');
		//ページネーターの読み込み
		$this->loadComponent('Paginator');

		$order = (['payment_date' => 'ASC']);

		//SELECTのSQL文オブジェクト
		$sqlObject = $this->payment->find()
			->order($order);

		//$recordsに検索結果をセットする
		//ページネーションを使いう場合必要なし
		// $this->set('records', $sqlObject->all());

		//ページネイト
		$this->set('records', $this->paginate($sqlObject));

	}

	public $paginate = [
		'limit' => 5
	];

}
