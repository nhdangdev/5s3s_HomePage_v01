function handlePickImageFile(input) {
    if (!input) { return }
    const oldImageUrl = input.dataset.oldImageUrl || ''
    const imagePreviewSelector = input.dataset.imagePreviewSelector || ''

    const pickedFile = input.files.item(0)
    if (!pickedFile) { return }

    const imagePreview = document.querySelector(imagePreviewSelector)
    if (!imagePreview) { return }
    const newImageUrl = URL.createObjectURL(pickedFile)
    imagePreview.src = newImageUrl

    if (!oldImageUrl) { return }
    URL.revokeObjectURL(oldImageUrl)
}