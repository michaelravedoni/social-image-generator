<h1 align="center">Social Image Generator</h1> <br>
<p align="center">
    <img alt="social-image-generator logo" title="social-image-generator logo" src="https://img.icons8.com/color/344/edit-image.png" width="200">
</p>
<div align="center">
  <strong>Self-hosted, Laravel Open Graph and Twitter image generator server</strong>
</div>
<div align="center">
  Simple and easy social image generator in PHP made simple.
</div>

<div align="center">
  <h3>
    <a href="https://github.com/michaelravedoni/social-image-generator#documentation">Documentation</a>
    <span> | </span>
    <a href="#">No demo</a>
    <span> | </span>
    <a href="https://github.com/michaelravedoni/social-image-generator#contributing">
      Contributing
    </a>
  </h3>
</div>

<div align="center">
  <sub>Built with ❤︎ by
  <a href="https://michaelravedoni.ch">Michael Ravedoni</a> and
  <a href="https://github.com/michaelravedoni/social-image-generator/contributors">
    contributors
  </a>
  </sub>
</div>

## 👋 Introduction

[![Conventional Commits](https://img.shields.io/badge/Conventional%20Commits-1.0.0-yellow.svg?style=flat-square)](https://conventionalcommits.org)
[![license](https://img.shields.io/github/license/michaelravedoni/social-image-generator.svg?style=flat-square)](https://github.com/michaelravedoni/social-image-generator/blob/master/LICENSE)

Self-hosted, Laravel PHP based Open Graph, Twitter and VK image generator server. Social Image Generator runs on your own server, get parameters via URL and generate the right image for the rignt social media.

This project is based on the excellent package [Open Graph Images Generator](https://github.com/abordage/og-images) by [Pavel Bychko](https://github.com/abordage).

**Demo** : No demo


## Table of Contents

- [Features](#features)
- [Install](#install)
- [Update](#update)
- [Documentation](#documentation)
- [Contributing](#contributing)
- [Changelog](#changelog)
- [Roadmap](#roadmap)
- [Authors and acknowledgment](#authors-and-acknowledgment)
- [Inspirations and packages used](#inspirations-and-packages-used)
- [License](#license)

## Features

- **Self-hosted**: Social Image Generator runs on your own server and is 100% open-source
- **Customizable**: You can customize the colors and aspect of the geretaed image
- **Laravel**: Based on the Laravel framework

## Install

**Requirements**

- PHP 8.0
- Composer

Follow this instructions to "install" Social Image Generator.

### 1. Download the source code

Clone this repository or [download it](https://github.com/michaelravedoni/social-image-generator/archive/master.zip) as an archive and decompress-it.

**A. Using `git clone`**

```bash
cd /var/www # Or wherever you chose to install web applications to
git clone https://github.com/michaelravedoni/social-image-generator.git
cd social-image-generator
git tag -l

# Examples below
v1.0.0
v1.1.0
v2.0.0
v2.1.0
```

```bash
git checkout v2.1.0
```
> ℹ️ The tags below are examples of what will be shown. You should always run git checkout on the latest tag. Social Image Generator is constantly evolving therefore, we advise you to always download and use the latest tagged release. Using a non-tagged release or the `main` branch may result in an unstable or broken environment.

**B. Download the zip archive**

[Download Social Image Generator](https://github.com/michaelravedoni/social-image-generator/archive/master.zip) as an archive and decompress it where you install web applications on your server.

### 2. Install Composer

If not already installed, [install composer](https://getcomposer.org/download/).

And then install required packages.

```bash
composer update --no-dev -o
```

## Update

If you've installed Social Image Generator using Git, then upgrading should be straight forward, requiring just a few minutes.

Follow the instructions running this command in your terminal at the root of your project (`cd PATH_TO_PROJECT_ROOT`).

```bash
git fetch origin main
git tag -l
git checkout LATEST_TAG
```
> Checking out a LATEST_TAG value won't work. You need to replace this with the latest version from the output of git tag -l.


## 📚 Documentation

Comming.

## Contributing

We’re really happy to accept contributions from the community, that’s the main reason why we open-sourced it! There are many ways to contribute, even if you’re not a technical person.

1. Fork it (<https://github.com/michaelravedoni/social-image-generator/fork>)
2. Create your feature branch (`git checkout -b feature/fooBar`)
3. Commit your changes (`git commit -am 'Add some fooBar'`)
4. Push to the branch (`git push origin feature/fooBar`)
5. Create a new Pull Request

## Changelog

You will find changelogs in the [CHANGELOG.md](https://github.com/michaelravedoni/social-image-generator/blob/master/CHANGELOG.md) file.

## Roadmap

- GD instead of Imagick

## Authors and acknowledgment

- **Michael Ravedoni** - *Initial work* - [michaelravedoni](https://github.com/michaelravedoni)

See also the list of [contributors](https://github.com/michaelravedoni/social-image-generator/contributors) who participated in this project.

## Inspirations and packages used

**Inspirations**
- [Images.weserv.nl](https://github.com/weserv/images)
- [Image Generator](https://github.com/nicoverbruggen/image-generator)

**Packages an tools**

- [Open Graph Images Generator](https://github.com/abordage/og-images)
- [Doctemplate by Carlos Yllobre](https://github.com/charlyllo/doctemplate)

## License

Social Image Generator is open-sourced software licensed under the [MIT License](https://opensource.org/licenses/MIT).
