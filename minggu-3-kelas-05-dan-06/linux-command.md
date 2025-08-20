# Linux Commands Notes

## Basic File & Directory Commands

### 1) `pwd` 
- **Function:** Tunjuk lokasi direktori semasa
- **Usage:** `pwd`
- **Example:** Shows current working directory path

### 2) `ls` 
- **Function:** Senaraikan fail & folder
- **Usage:** `ls`, `ls -la`, `ls -lh`
- **Example:** Lists files and directories in current location

### 3) `cd` 
- **Function:** Tukar direktori
- **Usage:** `cd folder_name`, `cd ..`, `cd ~`
- **Example:** Change to specified directory

### 4) `mkdir` 
- **Function:** Buat folder baru
- **Usage:** `mkdir folder_name`
- **Example:** Create new directory

### 5) `rmdir` 
- **Function:** Padam folder kosong
- **Usage:** `rmdir folder_name`
- **Example:** Remove empty directory

### 6) `touch` 
- **Function:** Buat fail kosong baru
- **Usage:** `touch filename.txt`
- **Example:** Create new empty file

### 7) `cp` 
- **Function:** Salin fail/folder
- **Usage:** `cp source destination`, `cp -r folder1 folder2`
- **Example:** Copy files or directories

### 8) `mv` 
- **Function:** Pindah/rename fail/folder
- **Usage:** `mv oldname newname`, `mv file1 folder/`
- **Example:** Move or rename files/directories

### 9) `rm` 
- **Function:** Padam fail
- **Usage:** `rm filename`, `rm -rf folder/`
- **Example:** Remove files or directories

### 10) `cat` 
- **Function:** Paparkan isi fail
- **Usage:** `cat filename.txt`
- **Example:** Display file contents

## Text Editing & Display

### 11) `nano/vi` 
- **Function:** Edit fail dalam terminal
- **Usage:** `nano filename.txt`, `vi filename.txt`
- **Example:** Edit files in terminal text editor

### 12) `clear` 
- **Function:** Kosongkan skrin terminal
- **Usage:** `clear` or `Ctrl + L`
- **Example:** Clear terminal screen

### 13) `history` 
- **Function:** Lihat arahan yang pernah ditaip
- **Usage:** `history`, `history 10`
- **Example:** Show command history

### 14) `man` 
- **Function:** Buka manual untuk sesuatu arahan
- **Usage:** `man command_name`
- **Example:** Open manual page for command

### 15) `echo` 
- **Function:** Paparkan teks atau tulis ke fail
- **Usage:** `echo "text"`, `echo "text" > filename.txt`
- **Example:** Display text or write to file

## System Monitoring Commands

### 16) `df -h` 
- **Function:** Semak penggunaan disk
- **Usage:** `df -h`
- **Example:** Check disk usage in human-readable format

### 17) `du -sh` 
- **Function:** Semak saiz folder/fail
- **Usage:** `du -sh folder_name/`
- **Example:** Check directory/file size

### 18) `top / htop` 
- **Function:** Monitor proses & penggunaan CPU/RAM
- **Usage:** `top`, `htop`
- **Example:** Monitor system processes and resource usage

### 19) `ps aux` 
- **Function:** Senaraikan proses yang sedang jalan
- **Usage:** `ps aux`, `ps aux | grep process_name`
- **Example:** List running processes

### 20) `kill` 
- **Function:** Hentikan proses tertentu
- **Usage:** `kill process_id`, `kill -9 process_id`
- **Example:** Terminate specific process

## Additional Useful Commands

### File Permissions
- `chmod` - Change file permissions
- `chown` - Change file ownership

### Network Commands
- `ping` - Test network connectivity
- `ifconfig` / `ip addr` - Show network interface information
- `netstat` - Show network connections

### Package Management
- `apt update` - Update package list (Ubuntu/Debian)
- `apt install package_name` - Install package
- `yum install package_name` - Install package (CentOS/RHEL)

### Search Commands
- `find` - Search for files
- `grep` - Search within files
- `locate` - Find files by name

---
*Notes: These commands work on most Linux distributions. Some may require root privileges (use `sudo` before command).*
