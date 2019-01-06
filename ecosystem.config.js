module.exports = {
    apps: [
        {
            name: 'artisan-pm2-demo-server',
            interpreter: 'php',
            script: 'artisan',
            args: 'serve',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G',
            uid: '1000'
        },
        {
            name: 'artisan-pm2-demo-queue-worker',
            interpreter: 'php',
            script: 'artisan',
            args: 'queue:work --sleep=3 --tries=3',
            instances: 1,
            autorestart: true,
            watch: false,
            max_memory_restart: '1G'
        }
    ]
};
