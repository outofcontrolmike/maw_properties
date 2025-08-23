<!-- File: templates/Listings/index.php -->

<h1>Property Listings</h1>
<button style="textDecoration: none;">
<?= $this->Html->link('Add Listing', ['action' => 'add']) ?></button>
<table>
    <tr>
        <!-- Todo: maybe add a thumbnail? this would have to pull from listing_images table and grab the first -->
        <th>id</th>
        <th>MLS Number</th>
        <th>Beds</th>
        <th>Baths</th>
        <th>Living_sqft</th>
        <th>Price</th>
        <th>Address</th>
        <th>City</th>
        <th>State</th>
        <th>Zip_code</th>
        <th>Regards</th>
        <th>Created</th>
        <th>Actions</th>
    </tr>

    <!-- $this... instance of the htmlHelper -->
    <?php foreach ($listings as $listing): ?>
        <tr>
            <td>
                <?= $this->Html->link($listing->id, ['action' => 'view', $listing->slug]) ?>
            </td>
             <td>
                <?= $listing->mls_number ?>
            </td>
            <td>
                <?= $listing->beds ?>
            </td>
            <td>
                <?= $listing->baths ?>
            </td>
            <td>
                <?= $listing->living_sqft ?>
            </td>
            <td>
                <?= $listing->price ?>
            </td>
            <td>
                <?= $listing->address ?>
            </td>
            <td>
                <?= $listing->city ?>
            </td>
            <td>
                <?= $listing->state ?>
            </td>
            <td>
                <?= $listing->zip_code ?>
            </td>
            <td>
                <?= $listing->regards ?>
            </td>

            <td>
                <?= $listing->created->format(DATE_RFC850) ?>
            </td>
            <td>
                <?= $this->Html->link('Edit', ['action' => 'edit', $listing->slug]) ?>
                <?= $this->Form->deleteLink(
                    'Delete',
                    ['action' => 'delete', $listing->slug],
                    ['confirm' => 'Are you sure?']
                )
                ?>
            </td>
        </tr>
    <?php endforeach; ?>
</table>