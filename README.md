## Web3 Wordpress Plugins by DePay

This repositroy contains all wordpress plugins developed by @DePayFi.

### Plugins

- [depay-wordpress](https://github.com/DePayFi/web3-wordpress-depay)

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
rm -rf ./wp-content/plugins/depay-wordpress
ln -s /Users/Sebastian/Work/DePay/web3-wordpress-depay ./wp-content/plugins/depay-wordpress
```

Make sure you reset your local git repository once you're done testing with the symlink:

```
git reset HEAD --hard
```

### Release

Release individual plugins through their plugin submodules.

## Web3 Payments

The future is [Web3 Payments](https://depay.com/web3-payments).

Blockchains hold the potential to faster, simpler and smarter payments.

Web3 Payments are borderless, peer-to-peer, and support multiple tokens and blockchains.

Accept any asset type that your customers already have in their wallet. [DePay](https://depay.com) is blockchain agnostic and can at any time be extended on any blockchain-specific plugin. Interoperability, scalability & flexibility are the cornerstones of our protocol. Accepting any asset that users already have in their wallets no matter which blockchain these are held on, reduces friction when performing decentralized payments.

### Chain Agnostic (Multichain)

Interoperability is the key principle on which our infrastructure is built. [DePay](https://depay.com) is extensible around any blockchain, ensuring a competitive cross-chain future.

### Permissionless

Interoperability is the key principle on which our infrastructure is built. [DePay](https://depay.com) is extensible around any blockchain, ensuring a competitive cross-chain future.

### Trustless

Most Web3 Payment providers & processors receive payments to wallets that they manage themselves. Only in a further intermediate step are the payments paid out to sellers. [DePay](https://depay.com) does not act as an intermediary. Every intermediate step is replaced by smart contracts which are connected to decentralized liquidity pools. As a result, trust is no longer required.

### Easy to use

Our ambition was to create an even easier user experience than you're used to from shopping in current non-crypto e-commerce stores. We think we've done a good job of that.

### Open Source

Feel free to use & contribute to our codebase at. We're happy to have you look under our hood. The [DePay](https://depay.com) protocol will always remain open source.

### Multichain

[DePay](https://depay.com) calculates payment routes on multiple blockchains simultaneously despite what your wallet is currently connected to. Our software automatically detects & switches the network if required.
