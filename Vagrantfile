# -*- mode: ruby -*-
# vi: set ft=ruby :

Vagrant.configure(2) do |config|
  ## Box configuration
  config.vm.box = "ubuntu/xenial64"

  config.vm.provider "virtualbox" do |v|
    v.memory = 1024
  end

  config.vm.network :private_network, ip: "192.168.111.224"
  config.vm.network :forwarded_port, guest: 22, host: 2224, id: "ssh"
end
