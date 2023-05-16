---
title: How to Create a Linux Virtual Machine (VM) for Running Ubuntu 23.04 on VirtualBox
description: In this guide, learn how to create and prepare a Linux VM (virtual  machine) for Ubuntu 23.04 on VirtualBox
tags: virtualbox, ubuntu2304
cover_image: https://cdn.eheidi.dev/ubuntu2304/ubuntu-virtualbox.png
---

## Requirements

For a smoother experience, I'd recommend setting up your VM with 8GB of RAM and 20GB of hard disk. That being said, the minimum requirements point to **4GB** of RAM and **15GB** hard disk.

## Step 1. Creating a VM

Select "New" on the main VirtualBox top menu. Give the VM a name, for instance, "Ubuntu 23.04".

![Step 1](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step1.png)

## Step 2. Setting up Memory Size

Set here the memory (RAM) size for your vm, in MB. A minimum of 4GB is recommended. Click "Next" when you're ready.

![Step 2](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step2.png)

## Step 3. Setting up the Hard Disk

In this section, you'll create a virtual hard disk for your VM. Choose "Create a virtual hard disk now" and click the "Create" button to proceed.

![Step 3](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step3.png)

### Hard disk type

Here you can choose the type of virtual disk you'll use for your VM. For better performance with VirtualBox, keep the default value "VDI (VirtualBox Disk Image)" selected. Click "Next" to continue.

![Step 4](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step4.png)

### Storage type

Here you can choose how memory is allocated. I recommend using the dynamically allocated type, which is the default. The fixed size will immediately take up all allocated disk space (which you will define in the next step), but it is faster to access once your VM is active. 

![Step 5](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step5.png)

### File location and size (important)

Make sure your disk size is at least 15GB, since this is a requirement for installing the default Ubuntu 23.04 desktop release.

![Step 6](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step6.png)

## Step 4. Finish Setup and Boot VM

After finished with the VM setup, your VM will show up on the left sidebar of the main VirtualBox window. Click twice on that, or use the "Start" button to boot your VM for the first time.

You'll get a window asking for a start-up disk. Click on the folder icon to open a new dialog to select your ISO disk. Click on the "Add" button and search for your Ubuntu 23.04 iso file - it should probably be in your Downloads folder.

![Step 8](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step8.png)

After selecting the right ISO file, click on the "Start" button to boot your VM with this disk.

![Step 9](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step9.png)

When the VM starts, you'll get the Ubuntu 23.04 boot screen. Choose "Try or Install Ubuntu" to proceed.

![Step 7](https://cdn.eheidi.dev/ubuntu2304/virtualbox/step7.png)

You can now proceed to either try or install Ubuntu on your new VM.

## Related Guides

{% guide 20230515_how-to-install-ubuntu-2304-as-main-system-for-software-development %}