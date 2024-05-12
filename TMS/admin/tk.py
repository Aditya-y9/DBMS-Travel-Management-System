import tkinter as tk
import webbrowser
import sys

def open_web_browser(url):
    webbrowser.open_new(url)

if __name__ == '__main__':
    if len(sys.argv) < 2:
        print("Usage: python script.py <URL>")
        sys.exit(1)

    url = sys.argv[1]

    window = tk.Tk()
    window.title("Web Browser")
    window.geometry("800x600")

    open_web_browser(url)

    window.mainloop()
