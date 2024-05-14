import os

path_to_report = r"D:\Downloads\dbms powerbi report final[1].pbix"


if os.path.exists(path_to_report):
    os.startfile(path_to_report)
else:
    print("The specified file does not exist.")