<!-- paginater -->
<div class="container-fluid" style="height: 60px; text-align: right;">
	<?php
		$start = 0;
		if ($this->Paginator->params()['count'] >= 1) {
			$start = (($this->Paginator->params()['page'] - 1) * $this->Paginator->params()['perPage'] + 1);
		}
		$end = $start + $this->Paginator->params()['perPage'] - 1;
		if ($this->Paginator->params()['count'] < $end) {
			$end = $this->Paginator->params()['count'];
		}
		echo $start . "件目～" . $end . "件目";
	?>
	　　
	<div class="pagination">
		<?= $this->Paginator->first('最初へ'); ?>
		<?= $this->Paginator->prev('前へ'); ?>
		<?= $this->Paginator->numbers(); ?>
		<?= $this->Paginator->next('次へ'); ?>
		<?= $this->Paginator->last('最後へ'); ?>
	</div>
</div>

<div class="container-fluid" style="margin-top: 0px;">
	<table class="table table-bordered table-hover table-striped table-responsive" style="margin-top: 10px;">
		<thead>
			<tr>
				<th>日付</th><th>金額</th><th>適用</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach($records as $data): ?>
				<tr>
					<td><?= date('Y/m/d', strtotime($data->payment_date)); ?></td>
					<td><?= $data->payment_price; ?></td>
					<td><?= $data->payment_memo; ?></td>
				</tr>
			<?php endforeach; ?>
		</tbody>
	</table>
</div>
