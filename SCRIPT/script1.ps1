Write-Host "Program to create a file"

$file = Read-Host "Enter a file name with it's extension"

New-Item $file

Write-Host "$file Successfully Created!"