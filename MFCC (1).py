import librosa # for audio file analysis
import librosa.display #to explicitly set the location of each object
from glob import glob # to list out all files in directory
import matplotlib.pyplot as plt #for plotting
import numpy as np  # to work with vector arrays
import speaker_verification_toolkit.tools as svt
from sklearn.mixture import GaussianMixture as GMM
import pickle as cPickle 
import sys
import os
import shutil
# FEATURE EXTRACTION
folder_path="C:/xampp/htdocs/uploads/*"
folder_path1="C:/xampp/htdocs/uploads/"
aud_file = glob(folder_path) # to list out all files in directory
features = np.asarray(())
for i in range (0,len(aud_file)):
    data , sr = librosa.load(aud_file[i],sr=44100, mono='true')
    data = svt.extract_mfcc(data)
    if features.size == 0:
        features = data
    else:
        features = np.vstack((features, data))
'''print(features)
print(features.shape)'''

# if choice == 1:
#     # MFCC FILE CREATION
#     names = input("Enter MFCC file name:\n")
#     mfccfile = names
#     np.savetxt(mfccfile, np.array(features[:]), fmt="%.4f", delimiter=',')
#     print("Finished Saving Model")


    # GMM MODEL TRAINING
print("Start GMM training") 
gmm = GMM(n_components = 64, max_iter = 100, covariance_type='diag',n_init = 3)
gmm.fit(features)
print("End GMM training")

# GMM MODEL SAVING 
print("Start Saving Model")
filename = sys.argv[1]
directory = 'C:/xampp/htdocs/output'
filepath = os.path.join(directory, filename)
with open(filepath, "wb") as file:
    cPickle.dump(gmm, file)
print("Model saved")


def clear_folder():
    for filename in os.listdir(folder_path1):
        file_path = os.path.join(folder_path1, filename)
        try:
            if os.path.isfile(file_path) or os.path.islink(file_path):
                os.unlink(file_path)
            elif os.path.isdir(file_path):
                shutil.rmtree(file_path)
        except Exception as e:
            print(f"Failed to delete {file_path}. Reason: {e}")
print("Checking for message...")

if "Model Saved" in "C:/xampp/htdocs/MFCC (1).py ".join(open(__file__).readlines()):
    print("Message found! Clearing folder...")
    clear_folder()
else:
    print("Message not found.")
            