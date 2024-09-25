---
title: Ubuntu 24.04 Installation Guide
description: Learn step-by-step how to install Ubuntu 24.04 on a computer or VM
tags: linux, ubuntu
cover_image: https://onlinux.erikaheidi.com/ubuntu2404/ubuntu2404-guide.png
---


The latest LTS (long-term support) release of the Ubuntu Linux distribution is called _Noble Numbat_. In this step-by-step guide with screenshots, we'll see how to install Ubuntu 24.04 on a computer or virtual machine.

## Preparation
Before proceeding, make sure you download the latest Ubuntu 24.04 ISO file from their [Downloads Page](https://ubuntu.com/download/desktop).

### Back Up First!!!
Make **sure** you back up any important files if you are reinstalling your system as a whole. Your disk will be erased, so you need to save your important files elsewhere. My personal priority order when creating backups goes like this:

- My `.ssh` directory containing SSH keys that may be configured within services such as GitHub
- My `.shrc` or `.zshrc` file with any custom aliases, paths, and environment variables 
- My `Documents` folder
- My `Projects` folder (less important since everything is on GitHub)
- My `Videos` and `Pictures` folder (just in case since I don't keep personal photos and videos here)


This will depend entirely on how you use this computer / system, but don't forget those hidden files and especially your SSH keys.

### Installing on a regular computer
The easiest way to install Ubuntu 24.04 on a regular computer (PC / Laptop) is by using a startup disk. You will need a removable media to create a startup disk using the ISO file you downloaded. [This guide](https://onlinux.systems/guides/20230515_how-to-create-a-ubuntu-2304-startup-disk-on-ubuntu-systems/) explains how to create such a disk on Ubuntu systems, and [this other guide](https://ubuntu.com/tutorials/install-ubuntu-desktop#3-create-a-bootable-usb-stick) from the Ubuntu blog shows how to create a bootable disk in other systems.

Once you have the disk ready, boot your computer with the disk and select "Try or Install Ubuntu" when prompted. You'll land in the installation program.

### Installing on a Virtual Machine
You can use this guide to install Ubuntu 24.04 on a VirtualBox (or similar) VM. In fact, I used a VirtualBox VM to take the screenshots in this guide, after I have upgraded my own personal laptop with Ubuntu 24.04. 

In order to do that, create a new virtual machine on VirtualBox and select the Ubuntu 24.04 iso file in the "ISO image" field. Then select the "Skip Unattended Installation" option to manually install Ubuntu 24.04 in this VM. If you leave this unchecked, VirtualBox will do an automatic installation and skip the installation wizard, so when you start the VM you will land on a pre-built Ubuntu 24.04 box.

![VirtualBox Setup](https://onlinux.erikaheidi.com/ubuntu2404/virtualbox.png)

Select at least 1GB of RAM and 10GB of disk space when creating the VM. Once that is ready, you can boot the VM. Select "Try or Install Ubuntu" when prompted. You'll land in the installation program. 



## Installating the System
To get started, select the language you want for your installation. Here we're going with English.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/01.png)

The next step is to choose between accessibility aids, if needed. You can select visual / hearing aids, and also configure mouse pointer and zoom options. Click "next" when you are ready.
![Ubuntu 24.04 installation step 02](https://onlinux.erikaheidi.com/ubuntu2404/02.png)

Now you should select your keyboard layout and variant. The most common choice here is "English (US)", but you might have a different keyboard layout depending on where you live. In my case, as I often write also in Portuguese, for keyboard variant I selected "English (US, alt international)" as this is what works for me. You can use the input box to test your keyboard and make sure any special characters work as expected. 
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/03.png)

The next step is to connect to the Internet, which is optional. In my case, I was installing Ubuntu on a virtual machine with VirtualBox, so a network was not yet available and that's why I chose "Do not connect to the internet". For regular desktop installations, I recommend that you connect to your network so that you're able to download updates and third-party drivers during the installation process.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/04.png)

Next, select "Install Ubuntu" to proceed with the installation process. If you'd prefer to first try out Ubuntu without making any modifications to your current system, you can choose "Try Ubuntu" here.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/05.png)

Now you should select "Interactive Installation" to proceed. The automated installation option is for advanced users who already have a script to repeat the installation process in multiple machines. Click "next" to continue.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/06.png)

Here you can choose between a default selection of essential apps, or an extended selection of applications including office tools. I recommend going with the default selection, and installing what you need after the setup is complete. Click "next" when you're ready to proceed.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/07.png)

Next, you should select whether you want to install third-party software such as proprietary drivers and additional media formats. Check both options and continue by clicking "next".
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/08.png)

Now you will select how you want to install Ubuntu. For whole system installations (recommended), check the first option "Erase disk and install Ubuntu". Before continuing, though, I highly recommend enabling **disk encryption**, for an added layer of security for your files and system. Click on the "Advanced features" button, and you'll get a popup window with a few more options.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/09.png)

Select "Use LVM and encryption" and click on the "Ok" button to confirm. Then, click on the "next" button to continue with the installation.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/10.png)

Next, you will be asked to provide a passphrase for the disk encryption (in case you selected this feature). This is **extremely important** since you won't be able to access your files if you forget the passphrase. You will be prompted to provide this pasword every time you boot the system. Make sure it's a good one that you won't forget.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/11.png)

After setting up your passphrase, click on "Next" to continue with the installation.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/12.png)

Next, you will be asked to set up your user account. Choose username and a hostname for this system, then set up a password. For increased security, make sure the "Require my password to log in" option is selected. Click on the "Next" button to continue.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/13.png)

You'll now be prompted to select your timezone. This might be pre-selected for you based on your network. Click "Next" to finish the installation wizard.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/14.png)

You should now see the Ubuntu 24.04 installation screen, while the installation program copies all the source files and sets up your new system.
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/15.png)

When the installation is finished, you will be asked to remove your bootable drive and restart the computer. Once it restarts and the boot is complete, you will be prompted to provide the passphrase to decrypt the disk and start Ubuntu. Then, you will land on the log in screen, where you should provide the password you created for your user in order to log in. 
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/16.png)
Your Ubuntu is successfully installed! You can now customize its appearance and install new software.

## Customizing Appearance and Dock

To customize your wallpaper and other appearance settings, right-click on the desktop and choose "Change Background" from the menu. In this screen you can change the background and the theme style (light / dark, and the color accent).

![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/17.png)

To change the Dock appearance, go to the "Ubuntu Desktop" item on the left menu. I personally prefer to have the dock at the bottom of the screen, and with the auto-hide option enabled. These are my changes:

- Auto-Hide Dock - enabled
- Panel Mode - disabled
- Icon Size - largest size available
- Position on Screen - Bottom

![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/18.png)

And this is the final result, the way I like it =)
![Ubuntu 24.04 installation step 01](https://onlinux.erikaheidi.com/ubuntu2404/19.png)

From now on, you can start installing new software. Also, don't forget to restore your backups.

## Suggested Additional Resources:

- [How to Install and Set Up Terminator + Oh My Zsh!](https://onlinux.systems/guides/20230523_how-to-install-and-set-up-terminator-and-oh-my-zsh-on-ubuntu-2304/) - this guide was made for Ubuntu 23.04, but it still works perfectly fine on Ubuntu 24.04!
- [Initial desktop setup guide for Ubuntu 23.04](https://onlinux.systems/guides/20230522_initial-desktop-setup-guide-for-ubuntu-2304/) - a few more tips on where to start after a fresh Ubuntu installation.