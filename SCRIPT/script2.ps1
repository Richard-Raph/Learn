$score = [int](Read-Host "Enter your score: ")

if ($score -ge 70 -and $score -le 100) {
    Write-Host "Congratulations! You have a distinction."
} elseif ($score -ge 50 -and $score -lt 70) {
    Write-Host "Congratulations! You have a pass mark."
} elseif ($score -lt 50) {
    Write-Host "You Failed."
} else {
    Write-Host "Invalid Score!"
}