" let Vundle manage Vundle
set rtp+=$HOME/.vim/bundle/vundle/
call vundle#rc()
" required!
Bundle 'gmarik/vundle'
" My Bundles here:
Bundle 'tpope/vim-fugitive'
Bundle 'Lokaltog/vim-easymotion'
Bundle 'rstacruz/sparkup', {'rtp': 'vim/'}
Bundle 'tpope/vim-rails.git'
Bundle 'L9'
Bundle 'FuzzyFinder'
Bundle 'git://git.wincent.com/command-t.git'
Bundle 'Markdown'
Bundle 'snipMate'
Bundle 'jQuery'
Bundle 'JavaScript-syntax'
Bundle 'git://github.com/kien/ctrlp.vim'
Bundle 'git://github.com/scrooloose/nerdtree'
Bundle 'git://github.com/mattn/emmet-vim'
Bundle 'git://github.com/Lokaltog/vim-powerline'
Bundle 'git://github.com/bronson/vim-trailing-whitespace'
Bundle 'yonchu/accelerated-smooth-scroll'

" 判断是否处于GUI界面
if has("gui_running")
    let g:isGUI = 1
else
    let g:isGUI = 0
endif


" 对部分语言设置单独的缩进
au FileType ruby,eruby,slim,coffee,sh set shiftwidth=2
au FileType ruby,eruby,slim,coffee,sh set tabstop=2
au FileType php,javascript,html,css set shiftwidth=4
au FileType php,javascript,html,css set tabstop=4


" 根据后缀名指定文件类型
au BufRead,BufNewFile *.h   setlocal ft=c
au BufRead,BufNewFile *.sql setlocal ft=mysql
au BufRead,BufNewFile *.txt setlocal ft=txt

if g:isGUI
    colorscheme molokai
    set guifont=Monaco
else
    colorscheme tango2
    set guifont=Monaco
endif

set expandtab                " 将Tab自动转化成空格 [需要输入真正的Tab键时，使用 Ctrl+V + Tab]
set backspace=2              " 设置退格键可用
set tabstop=4                " 设置tab键的宽度
set shiftwidth=4             " 换行时行间交错使用4个空格
set autoindent               " 自动对齐
set ai!                      " 设置自动缩进
set smartindent              " 智能自动缩进
set autoread                 " 当文件在外部被修改时自动更新该文件
set tags=tags;
set autochdir

set mouse=a                  " 启用鼠标
set nowrap                   " 不自动换行
set hlsearch                 " 高亮显示结果
set incsearch                " 在输入要搜索的文字时，vim会实时匹配
set nu!                      " 显示行号
set nocompatible             " 关闭兼容模式

syntax enable                " 打开语法高亮
syntax on                    " 开启文件类型侦测

filetype indent on           " 针对不同的文件类型采用不同的缩进格式
filetype plugin on           " 针对不同的文件类型加载对应的插件
filetype plugin indent on    " 启用自动补全

" 设置文件编码和文件格式
set fenc=utf-8
set encoding=utf-8
set fileencodings=utf-8,gbk,cp936,latin-1
set fileformat=unix
set fileformats=unix,dos,mac
source $VIMRUNTIME/delmenu.vim
source $VIMRUNTIME/menu.vim
language messages zh_CN.utf-8
" 使用GUI界面时的设置
if g:isGUI
    " 启动时自动最大化窗口
    au GUIEnter * simalt ~x
    "winpos 20 20            " 指定窗口出现的位置，坐标原点在屏幕左上角
    "set lines=20 columns=90 " 指定窗口大小，lines为高度，columns为宽度
    set guioptions+=c        " 使用字符提示框
    set guioptions-=m        " 隐藏菜单栏
    set guioptions-=T        " 隐藏工具栏
    set guioptions-=L        " 隐藏左侧滚动条
    set guioptions-=r        " 隐藏右侧滚动条
    set guioptions-=b        " 隐藏底部滚动条
    "set showtabline=0       " 隐藏Tab栏
    set cursorline           " 突出显示当前行
endif

set dictionary+=~/.vim/dict/mywords
set dictionary+=/usr/share/dict/words
set isk+=-


let NERDChristmasTree=1
let NERDTreeAutoCenter=1
nnoremap <silent> <F5> :NERDTree<CR>

"CtrlP
set runtimepath^=$HOME/.vim/bundle/ctrlp.vim
set runtimepath^=$HOME/.vim/bundle/rails.vim

"SnipMate
let g:snippets_dir = '$HOME/.vim/bundle/snipMate/snippets/'

"Emmet
let g:user_emmet_expandabbr_key='<c-e>'
let g:user_emmet_complete_tag=1

"Ctags
map <C-F12> :!ctags -R --fields=+iaS --extra=+q .<CR>
":set ff=unix
map <C-S-F1> :%s/\r\+$//e <CR>
