" I am a comment, this is how you comment in vim ( fun stuff )

" HOW TO RUN

" cd to whereever 1.vim is.

" Open vim:
" vim

" Type:
" :source 1.vim

" Hit return and you should have your answer


" This is a function to see if IS is a multiple of TO
function! Multiple(is, to)
	let a:m = a:is % a:to
	if a:m == 0
		return "true"
	else
		return "false"
	endif
endfunction


let total = 0
for a in range(1000)
	if Multiple(a,3) == "true"
		let total += a
	elseif Multiple(a,5) == "true"
		let total += a
	endif
endfor

" Outputing the Total
echo total