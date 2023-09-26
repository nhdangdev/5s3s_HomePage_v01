function copyToClipboard(text) {
    navigator.clipboard.writeText(text)
    alert(`Coppied "${text}"`);
}