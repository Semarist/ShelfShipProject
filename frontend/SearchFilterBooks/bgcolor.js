// Get all the cards
const cards = document.querySelectorAll('.card');

// Loop through each card
cards.forEach((card) => {
  // Get the image element
  const img = card.querySelector('img');

  // Create a new Image object
  const image = new Image();

  // Set the source of the Image object to the image URL
  image.src = img.src;

  // Listen for the 'load' event of the Image object
  image.addEventListener('load', () => {
    // Create a new Canvas element
    const canvas = document.createElement('canvas');

    // Set the width and height of the Canvas element to the image size
    canvas.width = image.width;
    canvas.height = image.height;

    // Draw the image onto the Canvas element
    const context = canvas.getContext('2d');
    context.drawImage(image, 0, 0);

    // Get the average color of the image
    const imageData = context.getImageData(0, 0, canvas.width, canvas.height);
    const pixels = imageData.data;
    let r = 0, g = 0, b = 0;
    for (let i = 0; i < pixels.length; i += 4) {
      r += pixels[i];
      g += pixels[i+1];
      b += pixels[i+2];
    }
    const pixelCount = pixels.length / 4;
    const avgR = Math.round(r / pixelCount);
    const avgG = Math.round(g / pixelCount);
    const avgB = Math.round(b / pixelCount);

    // Increase the brightness of the average color by 50%
    const brightness = 1.75;
    const brightR = Math.min(255, Math.round(avgR * brightness));
    const brightG = Math.min(255, Math.round(avgG * brightness));
    const brightB = Math.min(255, Math.round(avgB * brightness));

    // Set the background color of the card to the brightened color
    card.style.backgroundColor = `rgb(${brightR},${brightG},${brightB})`;
  });
});
