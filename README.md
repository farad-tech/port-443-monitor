# Port 443 Monitor

A simple PHP CLI tool to monitor number of active network connections.

## Usage

```bash
composer create-project farad-tech/port-443-monitor
sudo php monitor.php --interval=2
```
or clone directly:

```bash
git clone https://github.com/farad-tech/port-443-monitor.git
sudo php monitor.php
```

also you can get just value of current connection counts by ``FaradTech\Port443Monitor\ConnectionCounter`` class.
```php
<?php
$port = 443; // default value is 443 but you may set any port that you want
echo (new FaradTech\Port443Monitor\ConnectionCounter($port))->count(); // 73
```

### Screenshot
<img width="1320" height="384" alt="image" src="https://github.com/user-attachments/assets/368801d2-ece2-4ebd-a335-b86fc82ae9f6" />
