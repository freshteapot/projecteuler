
function FibonacciSequence(previous, current)
	return (previous + current);
end


previous = 0
current = 1

total = 0

repeat
	temp = current
	current = FibonacciSequence(previous,current)
	previous = temp
	
	if math.mod(current,2) == 0 then
		total = total + current
	end
until current >= 4000000

io.write(total,"\n")