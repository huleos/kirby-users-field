# Users field for Kirby 2

A simple checkbox field for Kirby CMS which lets you select users. All the users are shown except the users in the admin role. You can use this for authors on a blogpost or for user authentication.

## Installation

### Download
[Download the files](https://github.com/roylodder/kirby-users-field/archive/master.zip) and put them in a folder named `users`, inside the`site/fields` folder. If the fields folder doesn't exist, create it.

### With Git
If you are familiar with Git, you can clone this repository from Github inside the <code>/site/fields</code> folder.

    git clone https://github.com/roylodder/kirby-users-field.git users

Or you can use it as a Git Submodule.

    git submodule add https://github.com/roylodder/kirby-users-field.git site/fields/users

## How to use it

In your [blueprint](http://getkirby.com/docs/panel/blueprints) add the following field:

    fields:
      authors:
        label: Authors
        type: users

In your [template](http://getkirby.com/docs/templates) you can use the field like:

    <?php echo $page->authors(); ?>

## Authors

Author: Roy Lodder <http://roylodder.com>