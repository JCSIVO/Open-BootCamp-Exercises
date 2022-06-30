from tkinter import *

master = Tk()
elemento = StringVar()
listbox = Listbox(master)
for item in ['Audi', 'Seat', 'Peugeot', 'Volvo', 'Ferrari']:
    listbox.insert(END, item)
listbox.pack()
label = Label(text='lista de nombre Coches')
label.pack()
master.mainloop()