<?php
return [
    'name' => 'Projectname',
    'owner' => 'Project Owner',
    'search' => 'Search',
    'entries' => [
        'count' => '# Logs',
    ],
    'actions' => 'Actions',
    'count' => 'Project count',
    'create' => 'Create Project',
    'create_new' => 'Create a new project',
    'create_description' => 'Simply give the new project a name where you can remember for what it\'s for.',
    'new' => 'New Project',
    'created' => 'A new project was created with id :project_id and key :project_key',
    'edited' => 'The project was updated',
    'edit' => 'Edit this project',
    'edit_description' => 'You cannot change the project key!',
    'edit_button' => 'Edit this project',
    'key' => 'Projectkey',

    'configuration' => [
        'headline' => 'How to get your logs into this project 💡',
        '1' => [
            'title' => 'Step 1',
            'description' => 'Import the client',
            'text_1' => 'First, in your project, require the package via composer',
            'text_2' => '<code class="bg-gray-800 text-gray-200 p-2 select-all">composer require spresnac/logcrawler-client</code>',
        ],
        '2' => [
            'title' => 'Step 2',
            'description' => 'Setup your config',
            'text_1' => 'Edit your <code class="bg-gray-800 text-gray-200 select-all">config/logging.php</code> and add this at your <code class="bg-gray-800 text-gray-200 select-all">channels</code>',
        ],
        '3' => [
            'title' => 'Step 3',
            'description' => 'Adding the channel',
            'text_1' => 'Add the new channel to your logging configuration in <code class="bg-gray-800 text-gray-200 select-all">config/logging.php</code>',
        ],
        '4' => [
            'title' => 'Step 4',
            'description' => 'Adding your keys',
            'text_1' => 'Add your key to your <code class="bg-gray-800 text-gray-200 select-all">.env</code>',
            'hint' => 'This is already your key in the code above',
        ],
        '5' => [
            'title' => 'Step 5',
            'description' => 'Publish the logcrawler configuration',
            'text_1' => 'Run this command:',
        ],
    ],
];
