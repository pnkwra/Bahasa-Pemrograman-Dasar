import random

while True:
    print("=== GAME TEBAK ANGKA ===") 
    print("Tebak angka dari 1 sampai 100")
    print("Anda memiliki maksimal 3 kali kesempatan\n")

    angka_rahasia = random.randint(1, 100)
    kesempatan = 3

    while kesempatan > 0:
        try:
            tebakan = int(input("Masukkan nilai: "))
        except ValueError:
            print("Masukkan angka yang valid!\n")
            continue

        if tebakan < angka_rahasia:
            print("Clue: Angka lebih besar")
        elif tebakan > angka_rahasia:
            print("Clue: Angka lebih kecil")
        else:
            print("Anda benar!")
            print("Bilangan:", angka_rahasia)
            break

        kesempatan -= 1
        print("Sisa kesempatan:", kesempatan)
        print()

    if kesempatan == 0:
        print("Kesempatan habis!")
        print("Bilangan yang benar adalah:", angka_rahasia)

    ulang = input("\nApakah Anda ingin mengulang game ini? (y/t): ").lower()
    if ulang != 'y':
        print("Terima kasih sudah bermain!")
        break