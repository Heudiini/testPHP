# List of directories that contain PHP files
DIRS=("src/" "public/")

# Build script for serving static content instead of php files
DEST="./public_html"
html=".html"

# Create destination folder
mkdir -p "$DEST/"

# Execute all php files and save them as html
for dir in "${DIRS[@]}"; do
    for f in "$dir"*.php; do
        php "$f" | sed 's:\(<a.*href=".*\)\.php\(".*</a>\):\1\.html\2:g' > "$DEST/${f/$dir/$html}";
        echo "Processing $f into ${f/$dir/$html}..";
    done
done

# Copy all CSS files
for f in *.css; do
    cat "$f" > "$DEST/$f";
    echo "Processing $f file..";
done

# Copy styles.css
cp public/styles.css "$DEST/styles.css";
echo "Processing styles.css file..";

# Copy all JS files
for f in *.js; do
    cat "$f" > "$DEST/$f";
    echo "Processing $f file..";
done

echo "Process complete." ;
