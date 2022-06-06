## Web3 Wordpress Plugins by DePay

This repositroy contains all wordpress plugins developed by @DePayFi.

### Plugins

- [depay-donations](https://github.com/DePayFi/web3-wordpress-depay-donations)

### Demo

https://web3wordpress.xyz/


## Development

### Quick Start

1. Pull submodules

```
git submodule update --recursive --init
git submodule update --recursive --remote
```

2. Install PHP & MYSQL

3. Create "wordpress" database

4. Start server

```
php -S localhost:8000
```

5. Visit localhost:8000 to install wordpress

### Symlink local dev plugin directories

Make sure the server is stopped before creating the symlink.

```
rm -rf ./wp-content/plugins/depay-donations
ln -s /Users/Sebastian/Work/DePay/web3-wordpress-depay-donations ./wp-content/plugins/depay-donations
```

Make sure you reset your local git repository once you're done testing with the symlink:

```
git reset HEAD --hard
```

### Release

Release individual plugins through their plugin submodules.
