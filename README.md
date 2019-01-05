### Artisan PM2 Demo

The goal of this repo is to show how we could go about setting up PM2 to monitor
some of the Laravel long running artisan commands, such as ```serve```, 
```queue:work``` or ```queue:listen```

### Introduction

PM2 Runtime is a Production Process Manager for Node.js applications with a built-in Load Balancer. 
It allows you to keep applications alive forever, to reload them without 
downtime and facilitate common Devops tasks.

However, this would essentially be a drop-in replacement for something like Supervisord. 

The advantages of using PM2 over something like supervisord is :
 - It is written in Node so it's super fast and easy to install.
 - Processes configuration is saved in the code and can be versioned.

#### Installing PM2

With yarn:

```bash
$ yarn global add pm2
```

With npm:

```bash
$ npm install pm2 -g
```

#### Run the Processes we've defined

A convinent way to define processes is with an Ecosystem File. This file is committed with the repo and contains 
definition of processes to be run. See the complete documentation [here](https://pm2.io/doc/en/runtime/guide/ecosystem-file/).

Now to run our processes we only need to do :

```bash
$ pm2 start
```

To stop a process we just run :

```bash
$ pm2 stop <app_name>
```

To delete process we just need to run :

```bash
$ pm2 delete <app_name>
```
