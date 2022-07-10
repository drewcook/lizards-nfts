# Lizards NFT project

Extended from [this example](https://github.com/409H/sample_nft_project) but with PhanFT lizard traits.

## Directories & Files

* `traits_raw` - this is a directory holding all the layers to build the images, organised by a subdirectory
* `images_processed` - this is the output directory of the compiled images and metadata
* `src-node` - this directory holds truffle config for CLI deploy and contract verification
* `src-php` - this directory holds the script to compile the images and metadata
* `.env.example` - this file should be copied to `.env` with secret data for your truffle scripts
* `composer.json` - this is configuration for the php scripts (`src-php/`)
* `package.json` - this is configuration for the node scripts (`src-node/`)

## Installation and Running

Note: To begin, you should run `composer install` and `npm install`

* Compile the images with `composer run start` (`composer run test` for setup tests)
* Compile the contracts with `truffle migrate --network rinkeby` (make sure you run this when pwd is `src-node`)
  * Verify the contract with Etherscan with `truffle run verify SampleNftContract --network rinkeby` (make sure you run this when pwd `src-node`)

## Instructions

* Make sure you name your image files as `<trait_name>_<trait_shape>_<trait_color>.png`
* Generate your layers, with `00bg` being the main "background" of the image
  * `01base` being a transparent background image containing different lizard skins
  * `02eyes` being a transparent background image containing different eyes skins
  * `03mouth` being a transparent background image containing different mouth skins
  * `04clothes` being a transparent background image containing different clothes skins
  * `05head` being a transparent background image containing different headpiece skins
  * `06hand` being a transparent background image containing different handpiece skins
  * `07neck` being a transparent background image containing different neckpiece skins

* Read through the code in `src-php/index.php` and make adjustments as you see fit
  * You may want to add in some forced rarity in here

* Run `composer run test` to run the tests, and if passed, run `composer run start` to compile the images and metadata
* Upload the directory `images_processed/*` to a webserver - people favour [IPFS](https://www.pinata.cloud/) for this
