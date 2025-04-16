<?php

class Logger {
    private static array $logs = [];

    public static function log($userType, $username, $action) {
        $timestamp = date('Y-m-d H:i:s');
        self::$logs[] = [
            'timestamp' => $timestamp,
            'userType' => $userType,
            'username' => $username,
            'action' => $action
        ];
    }

    public static function showLogs() {
        $sortedLogs = array_reverse(self::$logs); // dari terbaru ke terlama
        foreach ($sortedLogs as $log) {
            echo "[{$log['timestamp']}] [{$log['userType']}] {$log['username']} - {$log['action']}\n";
        }
    }
}

class User {
    protected string $username;
    protected string $userType = "User";

    public function __construct($username) {
        $this->username = $username;
    }

    public function unggahPesan($pesan) {
        Logger::log($this->userType, $this->username, "Mengunggah pesan: \"$pesan\"");
    }

    public function hapusPesan($pesan) {
        echo "Akses ditolak: User tidak bisa menghapus pesan.\n";
    }

    public function sematkanPesan($pesan) {
        echo "Akses ditolak: User tidak bisa menyematkan pesan.\n";
    }
}

class Moderator extends User {
    protected string $userType = "Moderator";

    public function hapusPesan($pesan) {
        Logger::log($this->userType, $this->username, "Menghapus pesan: \"$pesan\"");
    }

    public function sematkanPesan($pesan) {
        echo "Akses ditolak: Moderator tidak bisa menyematkan pesan.\n";
    }
}

class Admin extends Moderator {
    protected string $userType = "Admin";

    public function sematkanPesan($pesan) {
        Logger::log($this->userType, $this->username, "Menyematkan pesan: \"$pesan\"");
    }
}

// Buat akun
$user = new User("Rudi");
$mod = new Moderator("Sinta");
$admin = new Admin("Basakara");

// Aksi mereka
$user->unggahPesan("Bismillah");
$user->hapusPesan("Bismillah");

$mod->unggahPesan("Pesan penting");
$mod->hapusPesan("Pesan penting");
$mod->sematkanPesan("Pesan penting");

$admin->unggahPesan("Info Admin");
$admin->hapusPesan("Info Admin");
$admin->sematkanPesan("Info Admin");

// Tampilkan log
echo "\n=== LOG AKTIVITAS ===\n";
Logger::showLogs();