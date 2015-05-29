# Validation
This Behavior Plugin has some extra validation rules for CakePHP 2

## Examples

### Match Fields

An easy way to confirm email addresses or passwords!

```php
'email' => array(
    'notEmpty' => array(
        'rule' => 'notEmpty',
        'message' => 'Please enter an email address'
    ),
    'email' => array(
        'rule'    => 'email',
        'message' => 'Please supply a valid email address.'
    ),
    'checkExists' => array(
        'rule' => 'checkExists',
        'message' => 'Please supply an unique email address.',
        'on' => 'create'
    )
),
'confirm_email' => array(
    'notEmpty' => array(
        'rule' => 'notEmpty',
        'message' => 'Please enter an email address'
    ),
    'email' => array(
        'rule'    => 'email',
        'message' => 'Please supply a valid email address.'
    ),
    'matchFields' => array(
        'rule' => array('matchFields', 'email'),
        'message' => 'The email addresses don\'t match.',
    )
),
```