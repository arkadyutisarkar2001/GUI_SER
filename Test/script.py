import sys

if len(sys.argv) < 2:
    print("Usage: python script.py folder_path")
else:
    folder_path = sys.argv[1]
    # process the folder path as needed
    print("Folder path: " + folder_path)