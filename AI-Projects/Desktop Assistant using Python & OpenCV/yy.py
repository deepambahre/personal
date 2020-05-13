from PIL import Image
import glob, os

size = 800, 375

for infile in glob.glob("*.jpg"):
    file, ext = os.path.splitext(infile)
    im = Image.open(infile).convert('L')
    im.thumbnail(size)
    im.save(file + ".thumbnail", "JPEG")