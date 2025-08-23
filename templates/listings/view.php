<h1><?= h($listing->mls_number) ?></h1>
<p><?= h($listing->regards) ?></p>
<p><small>Created: <?= $listing->created->format(DATE_RFC850) ?></small></p>
<p><?= $this->Html->link('Edit', ['action' => 'edit', $listing->slug]) ?></p>