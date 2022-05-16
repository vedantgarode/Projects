import subprocess
import sys


def install(file):
    subprocess.check_call([sys.executable,"pip", "install", file])

# file = open("requirement.txt","r")
install("tkinter")