character = input("Masukkan karakter: ")
tinggi = int(input("Masukkan jumlah tinngi: "))

for i in range(1, tinggi + 1):
    print(((character + " ") * i).center(80))