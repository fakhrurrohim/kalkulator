<?php

namespace Hacktoberfest;

/**
 * Kumpulan fungsi pembantu (helpers) untuk proyek Hacktoberfest PHP.
 */

/**
 * Menampilkan hasil operasi dengan format yang rapi.
 *
 * @param string $operation Nama operasi
 * @param mixed $result Hasil operasi
 * @return void
 */
function printResult(string $operation, $result): void {
    echo "[{$operation}] Hasil: {$result}" . PHP_EOL;
}

/**
 * Mengecek apakah input valid (numerik).
 *
 * @param mixed $a
 * @param mixed $b
 * @return bool
 */
function validateInputs($a, $b): bool {
    return is_numeric($a) && is_numeric($b);
}

/**
 * Menangani error agar tidak menghentikan seluruh program.
 *
 * @param callable $callback
 * @return void
 */
function safeExecute(callable $callback): void {
    try {
        $callback();
    } catch (\Throwable $e) {
        echo "❌ Terjadi kesalahan: " . $e->getMessage() . PHP_EOL;
    }
}
