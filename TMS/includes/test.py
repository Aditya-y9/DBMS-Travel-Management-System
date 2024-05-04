import tkinter as tk
from tkinter import ttk
import mariadb


class Application:
    def __init__(self, root):
        self.root = root
        self.root.title("Display Data")

        self.tree = ttk.Treeview(root, columns=("ID", "Name", "Password", "Role"))
        self.tree.heading("#0", text="Index")
        self.tree.heading("#1", text="ID")
        self.tree.heading("#2", text="Name")
        self.tree.heading("#3", text="Password")
        self.tree.heading("#4", text="Role")
        self.tree.pack(expand=True, fill="both")

        try:
            conn = mariadb.connect(
                user="username",
                password="password",
                host="localhost",
                database="dbms_project"
            )
            cur = conn.cursor()
            cur.execute("SELECT * FROM Admin")
            fetch = cur.fetchall()
            for index, data in enumerate(fetch, start=1):
                print(data)
                self.tree.insert("", "end", text=index, values=data)
        except mariadb.Error as e:
            print(f"Error fetching data from the database: {e}")

        root.mainloop()


if __name__ == "__main__":
    root = tk.Tk()
    app = Application(root)
