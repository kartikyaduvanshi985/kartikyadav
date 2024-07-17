import tkinter as tk
from tkinter import messagebox

def show_message():
    messagebox.showinfo("Message", "Button Clicked!")

def show_checkbox_state():
    state_text = "checked" if checkbox_var.get() else "unchecked"
    messagebox.showinfo("Checkbox State", f"Checkbox is {state_text}")

root = tk.Tk()
root.title("Simple GUI Example")

# Label
tk.Label(root, text="This is a label").pack(pady=10)

# Button
tk.Button(root, text="Click Me!", command=show_message).pack(pady=10)

# Checkbox
checkbox_var = tk.BooleanVar()
tk.Checkbutton(root, text="Check me", variable=checkbox_var).pack(pady=10)

# Button to show checkbox state
tk.Button(root, text="Show Checkbox State", command=show_checkbox_state).pack(pady=10)

root.mainloop()
