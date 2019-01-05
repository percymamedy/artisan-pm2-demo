module.exports = {
    apps: [{
        name: 'artisan-pm2-demo-server',
        interpreter: 'php',
        script: 'artisan',
        args: 'serve',
        instances: 1,
        autorestart: true,
        watch: false,
        max_memory_restart: '1G'
    }]
};
