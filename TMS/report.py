import os

path_to_report = r"C:\Users\MSHOME\Documents\DBMS.pbix"


if os.path.exists(path_to_report):
    os.startfile(path_to_report)
else:
    print("The specified file does not exist.")
