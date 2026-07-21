location = "A"
roomA = "Dirty"
roomB = "Dirty"

for step in range(1, 7):
    print("\nStep", step)
    print("Location:", location)
    print("Room A:", roomA)
    print("Room B:", roomB)

    if location == "A":
        if roomA == "Dirty":
            print("Action: SUCK")
            roomA = "Clean"
        else:
            print("Action: MOVE RIGHT")
            location = "B"

    elif location == "B":
        if roomB == "Dirty":
            print("Action: SUCK")
            roomB = "Clean"
        else:
            print("Action: MOVE LEFT")
            location = "A"

print("\nFinal State")
print("Location:", location)
print("Room A:", roomA)
print("Room B:", roomB)
