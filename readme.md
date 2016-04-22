# Kirby Users

**Version 0.2**

A checkboxes field for Kirby CMS which lets you select users. All users are shown by default. You can exclude users and users with selected roles from the options.

## Installation

1. Add `users` field folder into `/site/fields/`

## Setup

### Blueprint

Below is the most basic example.

```md
fields:
  users:
    label: Users
    type: users
```

### Default

If you want the selected user to be `Bart` when a page is created, you can set a default value.

```md
fields:
  users:
    label: Users
    default: bart
    type: users
```

### Exclude users

If you want to hide a user from the options you can simply ignore them.

```md
fields:
  users:
    label: Users
    type: users
    exclude:
      users:
        admin
```

You also can exclude multiple users.

```md
fields:
  users:
    label: Users
    type: users
    exclude:
      users:
        admin
        homer
```

### Exclude roles

If you want to hide all users with a role you can simply ignore them.

```md
fields:
  users:
    label: Users
    type: users
    exclude:
      roles:
        admin
```

You also can exclude multiple roles.

```md
fields:
  users:
    label: Users
    type: users
    exclude:
      roles:
        admin
        clients
```

### Exclude users and roles

You can combine the excluding options for roles and users.

```md
fields:
  users:
    label: Users
    type: users
    exclude:
      roles:
        admin
      users:
        bart
```

### Columns

Specifying the column option lets you change the number of option items that are displayed per row in the panel (1 till 5, default: 2).

```md
fields:
  users:
    label: Users
    type: users
    columns: 3
```

# Changelog

## 0.2

- Removed excluding of users with the admin role.
- Added option for excluding roles.
- Added option for excluding users.
- Added option for default selected user.

## 0.1

- Initial release

## Authors

Author: Roy Lodder <http://roylodder.com>
