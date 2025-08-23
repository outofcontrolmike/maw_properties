<!-- File: templates/listings/edit.php -->

<h1>Edit Listing</h1>
<?php
    echo $this->Form->create($listing);
    echo $this->Form->control('user_id', ['type' => 'hidden']);
    echo $this->Form->control('mls_number', ['rows' => '0']);
    echo $this->Form->control('beds');
    echo $this->Form->control('baths');
    echo $this->Form->control('living_sqft');
    echo $this->Form->control('price');
    echo $this->Form->control('address');
    echo $this->Form->control('city');
    // Todo: try to segregate ths states list since it will be used for adding listings as well
    echo $this->Form->control('state', [
    'label' => 'State',
    'type' => 'select',
    'options' => [
             'AL' => 'Alabama',
            'AK' => 'Alaska',
            'AZ' => 'Arizona',
            'AR' => 'Arkansas',
            'CA' => 'California',
            'CO' => 'Colorado',
            'CT' => 'Connecticut',
            'DE' => 'Delaware',
            'FL' => 'Florida',
            'GA' => 'Georgia',
            'HI' => 'Hawaii',
            'ID' => 'Idaho',
            'IL' => 'Illinois',
            'IN' => 'Indiana',
            'IA' => 'Iowa',
            'KS' => 'Kansas',
            'KY' => 'Kentucky',
            'LA' => 'Louisiana',
            'ME' => 'Maine',
            'MD' => 'Maryland',
            'MA' => 'Massachusetts',
            'MI' => 'Michigan',
            'MN' => 'Minnesota',
            'MS' => 'Mississippi',
            'MO' => 'Missouri',
            'MT' => 'Montana',
            'NE' => 'Nebraska',
            'NV' => 'Nevada',
            'NH' => 'New Hampshire',
            'NJ' => 'New Jersey',
            'NM' => 'New Mexico',
            'NY' => 'New York',
            'NC' => 'North Carolina',
            'ND' => 'North Dakota',
            'OH' => 'Ohio',
            'OK' => 'Oklahoma',
            'OR' => 'Oregon',
            'PA' => 'Pennsylvania',
            'RI' => 'Rhode Island',
            'SC' => 'South Carolina',
            'SD' => 'South Dakota',
            'TN' => 'Tennessee',
            'TX' => 'Texas',
            'UT' => 'Utah',
            'VT' => 'Vermont',
            'VA' => 'Virginia',
            'WA' => 'Washington',
            'WV' => 'West Virginia',
            'WI' => 'Wisconsin',
            'WY' => 'Wyoming',
    ],
    'empty' => 'Select a state'
]);
    echo $this->Form->control('zip_code');
    echo $this->Form->control('regards', ['rows' => '3']);
    echo $this->Form->control('replace image', ['type' => 'file']);
    echo $this->Form->button(__('Save listing'));
    echo $this->Form->end();
?>