<?php


function sendFile($A2fc42bebdb639d0, $E111d28e9acc50b9, $d094d3e133ec8c03, $ac6b7b5a62a17feb)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   405  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   405  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   405  RECV/63                   16?2=     ?3                   ?4294967294         	;0
	3   405  RECV_INIT/64              16?3=     ?4                   0:false             	;0
	4   407  GOTO/253                  ?0        ?5                   ?1                  	;0
	5   409  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'md5_file'        	;1
	6   409  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	7   409  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	8   409  ASSIGN/38                 ?1        16?4                 $11                 	;0
	9   410  INIT_FCALL_BY_NAME/59     ?0        ?0                   4:'ssh2_scp_send'   	;3
	10  410  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	11  410  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	12  410  SEND_VAR_EX/66            ?112      16?2                 ?3                  	;0
	13  410  DO_FCALL_BY_NAME/131      ?2        ?0                   ?0                  	;0
	14  411  INIT_FCALL_BY_NAME/59     ?0        ?0                   6:'trim'            	;1
	15  411  INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'explode'         	;2
	16  411  SEND_VAL_EX/116           ?80       10:' '               ?1                  	;0
	17  411  INIT_FCALL_BY_NAME/59     ?0        ?0                   11:'E04601C350EfBe4b'	;2
	18  411  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	19  411  CONCAT/8                  #14=      13:'md5sum "'        16?2                	;0
	20  411  CONCAT/8                  #15=      #14                  14:'"'              	;0
	21  411  SEND_VAL_EX/116           ?96       #15                  ?2                  	;0
	22  411  DO_FCALL_BY_NAME/131      $16=      ?0                   ?0                  	;0
	23  411  SEPARATE/156              $16=      $16                  ?0                  	;0
	24  411  FETCH_DIM_FUNC_ARG/93     $17=      $16                  15:'output'         	;2
	25  411  SEND_VAR_EX/66            ?96       $17                  ?2                  	;0
	26  411  DO_FCALL_BY_NAME/131      $18=      ?0                   ?0                  	;0
	27  411  SEPARATE/156              $18=      $18                  ?0                  	;0
	28  411  FETCH_DIM_FUNC_ARG/93     $19=      $18                  16:0                	;1
	29  411  SEND_VAR_EX/66            ?80       $19                  ?1                  	;0
	30  411  DO_FCALL_BY_NAME/131      $20=      ?0                   ?0                  	;0
	31  411  ASSIGN/38                 ?10       16?5                 $20                 	;0
	32  412  IS_NOT_EQUAL/18           #22=      16?4                 16?5                	;0
	33  412  BOOL_NOT/13               #23=      #22                  ?0                  	;0
	34  412  JMPZ/43                   ?0        #23                  ?36                 	;0	>>36
	35  413  GOTO/253                  ?0        ?68                  ?17                 	;0
	36  415  BOOL_NOT/13               #24=      16?3                 ?0                  	;0	<<34
	37  415  JMPZ/43                   ?0        #24                  ?39                 	;0	>>39
	38  416  GOTO/253                  ?0        ?71                  ?18                 	;0
	39  418  GOTO/253                  ?0        ?70                  ?19                 	;0	<<37
	40  420  NOP/0                     ?0        ?0                   ?0                  	;0
	41  421  BEGIN_SILENCE/57          #25=      ?0                   ?0                  	;0	<<62
	42  421  INIT_FCALL_BY_NAME/59     ?0        ?0                   20:'file_get_contents'	;1
	43  421  SEND_VAR_EX/66            ?80       16?1                 ?1                  	;0
	44  421  DO_FCALL_BY_NAME/131      $26=      ?0                   ?0                  	;0
	45  421  END_SILENCE/58            ?0        #25                  ?0                  	;0
	46  421  ASSIGN/38                 ?16       16?6                 $26                 	;0
	47  422  BEGIN_SILENCE/57          #28=      ?0                   ?0                  	;0
	48  422  INIT_FCALL_BY_NAME/59     ?0        ?0                   22:'fwrite'         	;2
	49  422  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	50  422  SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
	51  422  DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
	52  422  END_SILENCE/58            ?0        #28                  ?0                  	;0
	53  422  IS_IDENTICAL/15           #30=      $29                  24:false            	;0
	54  422  BOOL_NOT/13               #31=      #30                  ?0                  	;0
	55  422  JMPZ/43                   ?0        #31                  ?57                 	;0	>>57
	56  423  GOTO/253                  ?0        ?58                  ?25                 	;0
	57  425  ASSIGN/38                 ?21       16?8                 26:false            	;0	<<55
	58  427  INIT_FCALL_BY_NAME/59     ?0        ?0                   27:'fclose'         	;1
	59  427  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	60  427  DO_FCALL_BY_NAME/131      ?22       ?0                   ?0                  	;0
	61  427  JMP/42                    ?0        ?67                  ?0                  	;0	>>67
	62  428  CATCH/107                 ?1        29:'Exception'       16?9                	;0 CB	>>67,41
	63  429  ASSIGN/38                 ?23       16?8                 31:false            	;0
	64  430  INIT_FCALL_BY_NAME/59     ?0        ?0                   32:'fclose'         	;1
	65  430  SEND_VAR_EX/66            ?80       16?7                 ?1                  	;0
	66  430  DO_FCALL_BY_NAME/131      ?24       ?0                   ?0                  	;0
	67  432  RETURN/62                 ?0        16?8                 ?0                  	;0	<<61,62
	68  434  RETURN/62                 ?0        34:true              ?0                  	;0
	69  435  GOTO/253                  ?0        ?86                  ?35                 	;0
	70  437  ECHO/40                   ?0        36:'Failed to write using SCP, reverting to SFTP transfer... This will be take significantly longer!
' ?0                  	;0
	71  439  INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'ssh2_sftp'      	;1
	72  439  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	73  439  DO_FCALL_BY_NAME/131      $36=      ?0                   ?0                  	;0
	74  439  ASSIGN/38                 ?26       16?10                $36                 	;0
	75  440  ASSIGN/38                 ?27       16?8                 39:true             	;0
	76  441  BEGIN_SILENCE/57          #39=      ?0                   ?0                  	;0
	77  441  INIT_FCALL_BY_NAME/59     ?0        ?0                   40:'fopen'          	;2
	78  441  CONCAT/8                  #40=      42:'ssh2.sftp://'    16?10               	;0
	79  441  CONCAT/8                  #41=      #40                  16?2                	;0
	80  441  SEND_VAL_EX/116           ?80       #41                  ?1                  	;0
	81  441  SEND_VAL_EX/116           ?96       43:'wb'              ?2                  	;0
	82  441  DO_FCALL_BY_NAME/131      $42=      ?0                   ?0                  	;0
	83  441  END_SILENCE/58            ?0        #39                  ?0                  	;0
	84  441  ASSIGN/38                 ?32       16?7                 $42                 	;0
	85  442  GOTO/253                  ?0        ?40                  ?44                 	;0
	86  444  NOP/0                     ?0        45:NULL              ?0                  	;4294967295
	*/
}

function E04601c350EFBe4B($A2fc42bebdb639d0, $C6671ac66a4f1c57)
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   446  RECV/63                   16?0=     ?1                   ?4294967294         	;0
	1   446  RECV/63                   16?1=     ?2                   ?4294967294         	;0
	2   448  INIT_FCALL_BY_NAME/59     ?0        ?0                   0:'ssh2_exec'       	;2
	3   448  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	4   448  SEND_VAR_EX/66            ?96       16?1                 ?2                  	;0
	5   448  DO_FCALL_BY_NAME/131      $4=       ?0                   ?0                  	;0
	6   448  ASSIGN/38                 ?1        16?2                 $4                  	;0
	7   449  INIT_FCALL_BY_NAME/59     ?0        ?0                   2:'ssh2_fetch_stream'	;2
	8   449  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	9   449  FETCH_CONSTANT/99         #6=       ?0                   4:'SSH2_STREAM_STDERR'	;16
	10  449  SEND_VAL_EX/116           ?96       #6                   ?2                  	;0
	11  449  DO_FCALL_BY_NAME/131      $7=       ?0                   ?0                  	;0
	12  449  ASSIGN/38                 ?4        16?3                 $7                  	;0
	13  450  INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'stream_set_blocking'	;2
	14  450  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	15  450  SEND_VAL_EX/116           ?96       9:true               ?2                  	;0
	16  450  DO_FCALL_BY_NAME/131      ?5        ?0                   ?0                  	;0
	17  451  INIT_FCALL_BY_NAME/59     ?0        ?0                   10:'stream_set_blocking'	;2
	18  451  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	19  451  SEND_VAL_EX/116           ?96       12:true              ?2                  	;0
	20  451  DO_FCALL_BY_NAME/131      ?6        ?0                   ?0                  	;0
	21  452  INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'stream_get_contents'	;1
	22  452  SEND_VAR_EX/66            ?80       16?2                 ?1                  	;0
	23  452  DO_FCALL_BY_NAME/131      $11=      ?0                   ?0                  	;0
	24  452  INIT_ARRAY/71             #12=      $11                  15:'output'         	;10
	25  452  INIT_FCALL_BY_NAME/59     ?0        ?0                   16:'stream_get_contents'	;1
	26  452  SEND_VAR_EX/66            ?80       16?3                 ?1                  	;0
	27  452  DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
	28  452  ADD_ARRAY_ELEMENT/72      #12=      $13                  18:'error'          	;0
	29  452  RETURN/62                 ?0        #12                  ?0                  	;0
	30  453  NOP/0                     ?0        19:NULL              ?0                  	;4294967295
	*/
}

function shutdown()
{
	/*
	#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
	0   515  BIND_GLOBAL/168           ?0        16?0                 0:'b62d6460eb33ea07'	;0
	1   516  INIT_FCALL_BY_NAME/59     ?0        ?0                   1:'is_object'       	;1
	2   516  SEND_VAR_EX/66            ?80       16?0                 ?1                  	;0
	3   516  DO_FCALL_BY_NAME/131      $1=       ?0                   ?0                  	;0
	4   516  BOOL_NOT/13               #2=       $1                   ?0                  	;0
	5   516  JMPZ/43                   ?0        #2                   ?7                  	;0	>>7
	6   517  GOTO/253                  ?0        ?9                   ?3                  	;0
	7   519  INIT_METHOD_CALL/112      ?0        16?0                 4:'close_mysql'     	;0	<<5
	8   519  DO_FCALL/60               ?2        ?0                   ?0                  	;0
	9   521  NOP/0                     ?0        6:NULL               ?0                  	;4294967295
	*/
}

/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0    3     JMP/42                    ?0        ?762                 ?0                  	;0	>>762
1    5     ISSET_ISEMPTY_DIM_OBJ/115 #38=      16?1                 1:7                 	;16777216
2    5     JMPZ/43                   ?0        #38                  ?5                  	;0	>>5
3    5     QM_ASSIGN/22              #39=      2:443                ?0                  	;0
4    5     JMP/42                    ?0        ?10                  ?0                  	;0	>>10
5    5     INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'intval'          	;1	<<2
6    5     FETCH_DIM_FUNC_ARG/93     $40=      16?1                 5:7                 	;1
7    5     SEND_VAR_EX/66            ?80       $40                  ?1                  	;0
8    5     DO_FCALL_BY_NAME/131      $41=      ?0                   ?0                  	;0
9    5     QM_ASSIGN/22              #39=      $41                  ?0                  	;0
10   5     ASSIGN/38                 ?4        16?0                 #39                 	;0	<<4
11   6     ISSET_ISEMPTY_DIM_OBJ/115 #43=      16?1                 6:8                 	;16777216
12   6     JMPZ/43                   ?0        #43                  ?15                 	;0	>>15
13   6     QM_ASSIGN/22              #44=      7:0                  ?0                  	;0
14   6     JMP/42                    ?0        ?20                  ?0                  	;0	>>20
15   6     INIT_FCALL_BY_NAME/59     ?0        ?0                   8:'intval'          	;1	<<12
16   6     FETCH_DIM_FUNC_ARG/93     $45=      16?1                 10:8                	;1
17   6     SEND_VAR_EX/66            ?80       $45                  ?1                  	;0
18   6     DO_FCALL_BY_NAME/131      $46=      ?0                   ?0                  	;0
19   6     QM_ASSIGN/22              #44=      $46                  ?0                  	;0
20   6     ASSIGN/38                 ?9        16?2                 #44                 	;0	<<14
21   7     ISSET_ISEMPTY_DIM_OBJ/115 #48=      16?1                 11:9                	;16777216
22   7     JMPZ/43                   ?0        #48                  ?25                 	;0	>>25
23   7     QM_ASSIGN/22              #49=      12:0                 ?0                  	;0
24   7     JMP/42                    ?0        ?30                  ?0                  	;0	>>30
25   7     INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'intval'         	;1	<<22
26   7     FETCH_DIM_FUNC_ARG/93     $50=      16?1                 15:9                	;1
27   7     SEND_VAR_EX/66            ?80       $50                  ?1                  	;0
28   7     DO_FCALL_BY_NAME/131      $51=      ?0                   ?0                  	;0
29   7     QM_ASSIGN/22              #49=      $51                  ?0                  	;0
30   7     ASSIGN/38                 ?14       16?3                 #49                 	;0	<<24
31   8     ISSET_ISEMPTY_DIM_OBJ/115 #53=      16?1                 16:10               	;16777216
32   8     JMPZ/43                   ?0        #53                  ?35                 	;0	>>35
33   8     QM_ASSIGN/22              #54=      17:array (
)         ?0                  	;0
34   8     JMP/42                    ?0        ?41                  ?0                  	;0	>>41
35   8     INIT_FCALL_BY_NAME/59     ?0        ?0                   18:'json_decode'    	;2	<<32
36   8     FETCH_DIM_FUNC_ARG/93     $55=      16?1                 20:10               	;1
37   8     SEND_VAR_EX/66            ?80       $55                  ?1                  	;0
38   8     SEND_VAL_EX/116           ?96       21:true              ?2                  	;0
39   8     DO_FCALL_BY_NAME/131      $56=      ?0                   ?0                  	;0
40   8     QM_ASSIGN/22              #54=      $56                  ?0                  	;0
41   8     ASSIGN/38                 ?19       16?4                 #54                 	;0	<<34
42   9     FETCH_CONSTANT/99         #58=      ?0                   22:'PHP_EOL'        	;16
43   9     CONCAT/8                  #59=      25:'# XUI.one'       #58                 	;0
44   9     FETCH_CONSTANT/99         #60=      ?0                   26:'PHP_EOL'        	;16
45   9     CONCAT/8                  #61=      #59                  #60                 	;0
46   9     CONCAT/8                  #62=      #61                  29:'net.ipv4.tcp_congestion_control = bbr'	;0
47   9     FETCH_CONSTANT/99         #63=      ?0                   30:'PHP_EOL'        	;16
48   9     CONCAT/8                  #64=      #62                  #63                 	;0
49   9     CONCAT/8                  #65=      #64                  33:'net.core.default_qdisc = fq'	;0
50   9     FETCH_CONSTANT/99         #66=      ?0                   34:'PHP_EOL'        	;16
51   9     CONCAT/8                  #67=      #65                  #66                 	;0
52   9     CONCAT/8                  #68=      #67                  37:'net.ipv4.tcp_rmem = 8192 87380 134217728'	;0
53   9     FETCH_CONSTANT/99         #69=      ?0                   38:'PHP_EOL'        	;16
54   9     CONCAT/8                  #70=      #68                  #69                 	;0
55   9     CONCAT/8                  #71=      #70                  41:'net.ipv4.udp_rmem_min = 16384'	;0
56   9     FETCH_CONSTANT/99         #72=      ?0                   42:'PHP_EOL'        	;16
57   9     CONCAT/8                  #73=      #71                  #72                 	;0
58   9     CONCAT/8                  #74=      #73                  45:'net.core.rmem_default = 262144'	;0
59   9     FETCH_CONSTANT/99         #75=      ?0                   46:'PHP_EOL'        	;16
60   9     CONCAT/8                  #76=      #74                  #75                 	;0
61   9     CONCAT/8                  #77=      #76                  49:'net.core.rmem_max = 268435456'	;0
62   9     FETCH_CONSTANT/99         #78=      ?0                   50:'PHP_EOL'        	;16
63   9     CONCAT/8                  #79=      #77                  #78                 	;0
64   9     CONCAT/8                  #80=      #79                  53:'net.ipv4.tcp_wmem = 8192 65536 134217728'	;0
65   9     FETCH_CONSTANT/99         #81=      ?0                   54:'PHP_EOL'        	;16
66   9     CONCAT/8                  #82=      #80                  #81                 	;0
67   9     CONCAT/8                  #83=      #82                  57:'net.ipv4.udp_wmem_min = 16384'	;0
68   9     FETCH_CONSTANT/99         #84=      ?0                   58:'PHP_EOL'        	;16
69   9     CONCAT/8                  #85=      #83                  #84                 	;0
70   9     CONCAT/8                  #86=      #85                  61:'net.core.wmem_default = 262144'	;0
71   9     FETCH_CONSTANT/99         #87=      ?0                   62:'PHP_EOL'        	;16
72   9     CONCAT/8                  #88=      #86                  #87                 	;0
73   9     CONCAT/8                  #89=      #88                  65:'net.core.wmem_max = 268435456'	;0
74   9     FETCH_CONSTANT/99         #90=      ?0                   66:'PHP_EOL'        	;16
75   9     CONCAT/8                  #91=      #89                  #90                 	;0
76   9     CONCAT/8                  #92=      #91                  69:'net.core.somaxconn = 1000000'	;0
77   9     FETCH_CONSTANT/99         #93=      ?0                   70:'PHP_EOL'        	;16
78   9     CONCAT/8                  #94=      #92                  #93                 	;0
79   9     CONCAT/8                  #95=      #94                  73:'net.core.netdev_max_backlog = 250000'	;0
80   9     FETCH_CONSTANT/99         #96=      ?0                   74:'PHP_EOL'        	;16
81   9     CONCAT/8                  #97=      #95                  #96                 	;0
82   9     CONCAT/8                  #98=      #97                  77:'net.core.optmem_max = 65535'	;0
83   9     FETCH_CONSTANT/99         #99=      ?0                   78:'PHP_EOL'        	;16
84   9     CONCAT/8                  #100=     #98                  #99                 	;0
85   9     CONCAT/8                  #101=     #100                 81:'net.ipv4.tcp_max_tw_buckets = 1440000'	;0
86   9     FETCH_CONSTANT/99         #102=     ?0                   82:'PHP_EOL'        	;16
87   9     CONCAT/8                  #103=     #101                 #102                	;0
88   9     CONCAT/8                  #104=     #103                 85:'net.ipv4.tcp_max_orphans = 16384'	;0
89   9     FETCH_CONSTANT/99         #105=     ?0                   86:'PHP_EOL'        	;16
90   9     CONCAT/8                  #106=     #104                 #105                	;0
91   9     CONCAT/8                  #107=     #106                 89:'net.ipv4.ip_local_port_range = 2000 65000'	;0
92   9     FETCH_CONSTANT/99         #108=     ?0                   90:'PHP_EOL'        	;16
93   9     CONCAT/8                  #109=     #107                 #108                	;0
94   9     CONCAT/8                  #110=     #109                 93:'net.ipv4.tcp_no_metrics_save = 1'	;0
95   9     FETCH_CONSTANT/99         #111=     ?0                   94:'PHP_EOL'        	;16
96   9     CONCAT/8                  #112=     #110                 #111                	;0
97   9     CONCAT/8                  #113=     #112                 97:'net.ipv4.tcp_slow_start_after_idle = 0'	;0
98   9     FETCH_CONSTANT/99         #114=     ?0                   98:'PHP_EOL'        	;16
99   9     CONCAT/8                  #115=     #113                 #114                	;0
100  9     CONCAT/8                  #116=     #115                 101:'net.ipv4.tcp_fin_timeout = 15'	;0
101  9     FETCH_CONSTANT/99         #117=     ?0                   102:'PHP_EOL'       	;16
102  9     CONCAT/8                  #118=     #116                 #117                	;0
103  9     CONCAT/8                  #119=     #118                 105:'net.ipv4.tcp_keepalive_time = 300'	;0
104  9     FETCH_CONSTANT/99         #120=     ?0                   106:'PHP_EOL'       	;16
105  9     CONCAT/8                  #121=     #119                 #120                	;0
106  9     CONCAT/8                  #122=     #121                 109:'net.ipv4.tcp_keepalive_probes = 5'	;0
107  9     FETCH_CONSTANT/99         #123=     ?0                   110:'PHP_EOL'       	;16
108  9     CONCAT/8                  #124=     #122                 #123                	;0
109  9     CONCAT/8                  #125=     #124                 113:'net.ipv4.tcp_keepalive_intvl = 15'	;0
110  9     FETCH_CONSTANT/99         #126=     ?0                   114:'PHP_EOL'       	;16
111  9     CONCAT/8                  #127=     #125                 #126                	;0
112  9     CONCAT/8                  #128=     #127                 117:'fs.file-max=20970800'	;0
113  9     FETCH_CONSTANT/99         #129=     ?0                   118:'PHP_EOL'       	;16
114  9     CONCAT/8                  #130=     #128                 #129                	;0
115  9     CONCAT/8                  #131=     #130                 121:'fs.nr_open=20970800'	;0
116  9     FETCH_CONSTANT/99         #132=     ?0                   122:'PHP_EOL'       	;16
117  9     CONCAT/8                  #133=     #131                 #132                	;0
118  9     CONCAT/8                  #134=     #133                 125:'fs.aio-max-nr=20970800'	;0
119  9     FETCH_CONSTANT/99         #135=     ?0                   126:'PHP_EOL'       	;16
120  9     CONCAT/8                  #136=     #134                 #135                	;0
121  9     CONCAT/8                  #137=     #136                 129:'net.ipv4.tcp_timestamps = 1'	;0
122  9     FETCH_CONSTANT/99         #138=     ?0                   130:'PHP_EOL'       	;16
123  9     CONCAT/8                  #139=     #137                 #138                	;0
124  9     CONCAT/8                  #140=     #139                 133:'net.ipv4.tcp_window_scaling = 1'	;0
125  9     FETCH_CONSTANT/99         #141=     ?0                   134:'PHP_EOL'       	;16
126  9     CONCAT/8                  #142=     #140                 #141                	;0
127  9     CONCAT/8                  #143=     #142                 137:'net.ipv4.tcp_mtu_probing = 1'	;0
128  9     FETCH_CONSTANT/99         #144=     ?0                   138:'PHP_EOL'       	;16
129  9     CONCAT/8                  #145=     #143                 #144                	;0
130  9     CONCAT/8                  #146=     #145                 141:'net.ipv4.route.flush = 1'	;0
131  9     FETCH_CONSTANT/99         #147=     ?0                   142:'PHP_EOL'       	;16
132  9     CONCAT/8                  #148=     #146                 #147                	;0
133  9     CONCAT/8                  #149=     #148                 145:'net.ipv6.route.flush = 1'	;0
134  9     ASSIGN/38                 ?112      16?5                 #149                	;0
135  10    GOTO/253                  ?0        ?644                 ?146                	;0
136  12    INIT_FCALL_BY_NAME/59     ?0        ?0                   147:'range'         	;2
137  12    SEND_VAL_EX/116           ?80       149:1                ?1                  	;0
138  12    SEND_VAR_EX/66            ?96       16?6                 ?2                  	;0
139  12    DO_FCALL_BY_NAME/131      $151=     ?0                   ?0                  	;0
140  12    FE_RESET_R/77             $152=     $151                 ?197                	;0
141  12    FE_FETCH_R/78             ?0        $152                 16?7                	;197	>>197	<<196
142  13    FETCH_CONSTANT/99         #153=     ?0                   150:'XUI_HOME'      	;16
143  13    CONCAT/8                  #154=     153:'start-stop-daemon --start --quiet --pidfile ' #153                	;0
144  13    CONCAT/8                  #155=     #154                 154:'bin/php/sockets/'	;0
145  13    CONCAT/8                  #156=     #155                 16?7                	;0
146  13    CONCAT/8                  #157=     #156                 155:'.pid --exec '  	;0
147  13    FETCH_CONSTANT/99         #158=     ?0                   156:'XUI_HOME'      	;16
148  13    CONCAT/8                  #159=     #157                 #158                	;0
149  13    CONCAT/8                  #160=     #159                 159:'bin/php/sbin/php-fpm -- --daemonize --fpm-config '	;0
150  13    FETCH_CONSTANT/99         #161=     ?0                   160:'XUI_HOME'      	;16
151  13    CONCAT/8                  #162=     #160                 #161                	;0
152  13    CONCAT/8                  #163=     #162                 163:'bin/php/etc/'  	;0
153  13    CONCAT/8                  #164=     #163                 16?7                	;0
154  13    CONCAT/8                  #165=     #164                 164:'.conf
'        	;0
155  13    ASSIGN_CONCAT/30          ?128      16?8                 #165                	;0
156  14    FETCH_CONSTANT/99         #167=     ?0                   165:'XUI_HOME'      	;16
157  14    CONCAT/8                  #168=     168:'    server unix:' #167                	;0
158  14    CONCAT/8                  #169=     #168                 169:'bin/php/sockets/'	;0
159  14    CONCAT/8                  #170=     #169                 16?7                	;0
160  14    CONCAT/8                  #171=     #170                 170:'.sock;
'       	;0
161  14    ASSIGN_CONCAT/30          ?134      16?9                 #171                	;0
162  15    FETCH_CONSTANT/99         #173=     ?0                   171:'TMP_PATH'      	;16
163  15    INIT_FCALL_BY_NAME/59     ?0        ?0                   174:'md5'           	;1
164  15    INIT_FCALL_BY_NAME/59     ?0        ?0                   176:'time'          	;0
165  15    DO_FCALL_BY_NAME/131      $174=     ?0                   ?0                  	;0
166  15    CONCAT/8                  #175=     $174                 16?7                	;0
167  15    CONCAT/8                  #176=     #175                 178:'.conf'         	;0
168  15    SEND_VAL_EX/116           ?80       #176                 ?1                  	;0
169  15    DO_FCALL_BY_NAME/131      $177=     ?0                   ?0                  	;0
170  15    CONCAT/8                  #178=     #173                 $177                	;0
171  15    ASSIGN/38                 ?141      16?10                #178                	;0
172  16    INIT_FCALL_BY_NAME/59     ?0        ?0                   179:'file_put_contents'	;2
173  16    SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
174  16    INIT_FCALL_BY_NAME/59     ?0        ?0                   181:'str_replace'   	;3
175  16    SEND_VAL_EX/116           ?80       183:'#PATH#'         ?1                  	;0
176  16    FETCH_CONSTANT/99         #180=     ?0                   184:'XUI_HOME'      	;16
177  16    SEND_VAL_EX/116           ?96       #180                 ?2                  	;0
178  16    INIT_FCALL_BY_NAME/59     ?0        ?0                   187:'str_replace'   	;3
179  16    SEND_VAL_EX/116           ?80       189:'#ID#'           ?1                  	;0
180  16    SEND_VAR_EX/66            ?96       16?7                 ?2                  	;0
181  16    SEND_VAR_EX/66            ?112      16?11                ?3                  	;0
182  16    DO_FCALL_BY_NAME/131      $181=     ?0                   ?0                  	;0
183  16    SEND_VAR_NO_REF_EX/50     ?112      $181                 ?3                  	;0
184  16    DO_FCALL_BY_NAME/131      $182=     ?0                   ?0                  	;0
185  16    SEND_VAR_NO_REF_EX/50     ?96       $182                 ?2                  	;0
186  16    DO_FCALL_BY_NAME/131      ?145      ?0                   ?0                  	;0
187  17    INIT_FCALL_BY_NAME/59     ?0        ?0                   190:'sendFile'      	;3
188  17    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
189  17    SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
190  17    FETCH_CONSTANT/99         #184=     ?0                   192:'XUI_HOME'      	;16
191  17    CONCAT/8                  #185=     #184                 195:'bin/php/etc/'  	;0
192  17    CONCAT/8                  #186=     #185                 16?7                	;0
193  17    CONCAT/8                  #187=     #186                 196:'.conf'         	;0
194  17    SEND_VAL_EX/116           ?112      #187                 ?3                  	;0
195  17    DO_FCALL_BY_NAME/131      ?150      ?0                   ?0                  	;0
196  18    JMP/42                    ?0        ?141                 ?0                  	;0	>>141
197  18    FE_FREE/127               ?0        $152                 ?0                  	;0	<<140
198  21    ASSIGN_CONCAT/30          ?151      16?9                 197:'}'             	;0
199  22    FETCH_CONSTANT/99         #190=     ?0                   198:'TMP_PATH'      	;16
200  22    INIT_FCALL_BY_NAME/59     ?0        ?0                   201:'md5'           	;1
201  22    INIT_FCALL_BY_NAME/59     ?0        ?0                   203:'time'          	;0
202  22    DO_FCALL_BY_NAME/131      $191=     ?0                   ?0                  	;0
203  22    CONCAT/8                  #192=     $191                 205:'daemons.sh'    	;0
204  22    SEND_VAL_EX/116           ?80       #192                 ?1                  	;0
205  22    DO_FCALL_BY_NAME/131      $193=     ?0                   ?0                  	;0
206  22    CONCAT/8                  #194=     #190                 $193                	;0
207  22    ASSIGN/38                 ?157      16?10                #194                	;0
208  23    INIT_FCALL_BY_NAME/59     ?0        ?0                   206:'file_put_contents'	;2
209  23    SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
210  23    SEND_VAR_EX/66            ?96       16?8                 ?2                  	;0
211  23    DO_FCALL_BY_NAME/131      ?158      ?0                   ?0                  	;0
212  24    GOTO/253                  ?0        ?1096                ?208                	;0
213  27    ECHO/40                   ?0        209:'Adding sysctl.conf
' ?0                  	;0
214  28    INIT_FCALL_BY_NAME/59     ?0        ?0                   210:'E04601c350EfBE4b'	;2
215  28    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
216  28    SEND_VAL_EX/116           ?96       212:'sudo modprobe ip_conntrack' ?2                  	;0
217  28    DO_FCALL_BY_NAME/131      ?159      ?0                   ?0                  	;0
218  29    INIT_FCALL_BY_NAME/59     ?0        ?0                   213:'file_put_contents'	;2
219  29    FETCH_CONSTANT/99         #198=     ?0                   215:'TMP_PATH'      	;16
220  29    CONCAT/8                  #199=     #198                 218:'sysctl_'       	;0
221  29    CONCAT/8                  #200=     #199                 16?13               	;0
222  29    SEND_VAL_EX/116           ?80       #200                 ?1                  	;0
223  29    SEND_VAR_EX/66            ?96       16?5                 ?2                  	;0
224  29    DO_FCALL_BY_NAME/131      ?163      ?0                   ?0                  	;0
225  30    INIT_FCALL_BY_NAME/59     ?0        ?0                   219:'sendFile'      	;3
226  30    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
227  30    FETCH_CONSTANT/99         #202=     ?0                   221:'TMP_PATH'      	;16
228  30    CONCAT/8                  #203=     #202                 224:'sysctl_'       	;0
229  30    CONCAT/8                  #204=     #203                 16?13               	;0
230  30    SEND_VAL_EX/116           ?96       #204                 ?2                  	;0
231  30    SEND_VAL_EX/116           ?112      225:'/etc/sysctl.conf' ?3                  	;0
232  30    DO_FCALL_BY_NAME/131      ?167      ?0                   ?0                  	;0
233  31    GOTO/253                  ?0        ?833                 ?226                	;0
234  33    INIT_FCALL_BY_NAME/59     ?0        ?0                   227:'intval'        	;1
235  33    INIT_FCALL_BY_NAME/59     ?0        ?0                   229:'e04601c350EFBE4B'	;2
236  33    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
237  33    SEND_VAL_EX/116           ?96       231:'sudo cat /proc/cpuinfo | grep "^processor" | wc -l' ?2                  	;0
238  33    DO_FCALL_BY_NAME/131      $206=     ?0                   ?0                  	;0
239  33    SEPARATE/156              $206=     $206                 ?0                  	;0
240  33    FETCH_DIM_FUNC_ARG/93     $207=     $206                 232:'output'        	;1
241  33    SEND_VAR_EX/66            ?80       $207                 ?1                  	;0
242  33    DO_FCALL_BY_NAME/131      $208=     ?0                   ?0                  	;0
243  33    JMP_SET/152               #209=     $208                 ?245                	;0
244  33    QM_ASSIGN/22              #209=     233:4                ?0                  	;0
245  33    ASSIGN/38                 ?172      16?6                 #209                	;0
246  34    INIT_FCALL_BY_NAME/59     ?0        ?0                   234:'e04601c350EFBE4B'	;2
247  34    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
248  34    FETCH_CONSTANT/99         #211=     ?0                   236:'XUI_HOME'      	;16
249  34    CONCAT/8                  #212=     239:'sudo rm '       #211                	;0
250  34    CONCAT/8                  #213=     #212                 240:'bin/php/etc/*.conf'	;0
251  34    SEND_VAL_EX/116           ?96       #213                 ?2                  	;0
252  34    DO_FCALL_BY_NAME/131      ?176      ?0                   ?0                  	;0
253  35    ASSIGN/38                 ?177      16?8                 241:'#! /bin/bash
' 	;0
254  36    ASSIGN/38                 ?178      16?9                 242:'upstream php {
    least_conn;
'	;0
255  37    INIT_FCALL_BY_NAME/59     ?0        ?0                   243:'file_get_contents'	;1
256  37    FETCH_CONSTANT/99         #217=     ?0                   245:'XUI_HOME'      	;16
257  37    CONCAT/8                  #218=     #217                 248:'bin/php/etc/template'	;0
258  37    SEND_VAL_EX/116           ?80       #218                 ?1                  	;0
259  37    DO_FCALL_BY_NAME/131      $219=     ?0                   ?0                  	;0
260  37    ASSIGN/38                 ?182      16?11                $219                	;0
261  38    GOTO/253                  ?0        ?136                 ?249                	;0
262  40    INIT_FCALL_BY_NAME/59     ?0        ?0                   250:'e04601c350EFBe4b'	;2
263  40    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
264  40    FETCH_CONSTANT/99         #221=     ?0                   252:'PHP_BIN'       	;16
265  40    CONCAT/8                  #222=     255:'sudo '          #221                	;0
266  40    CONCAT/8                  #223=     #222                 256:' '             	;0
267  40    FETCH_CONSTANT/99         #224=     ?0                   257:'CLI_PATH'      	;16
268  40    CONCAT/8                  #225=     #223                 #224                	;0
269  40    CONCAT/8                  #226=     #225                 260:'update.php "post-update"'	;0
270  40    SEND_VAL_EX/116           ?96       #226                 ?2                  	;0
271  40    DO_FCALL_BY_NAME/131      ?189      ?0                   ?0                  	;0
272  41    INIT_FCALL_BY_NAME/59     ?0        ?0                   261:'E04601C350eFBE4b'	;2
273  41    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
274  41    FETCH_CONSTANT/99         #228=     ?0                   263:'XUI_HOME'      	;16
275  41    CONCAT/8                  #229=     266:'sudo '          #228                	;0
276  41    CONCAT/8                  #230=     #229                 267:'status 1'      	;0
277  41    SEND_VAL_EX/116           ?96       #230                 ?2                  	;0
278  41    DO_FCALL_BY_NAME/131      ?193      ?0                   ?0                  	;0
279  42    INIT_FCALL_BY_NAME/59     ?0        ?0                   268:'E04601c350EFBE4b'	;2
280  42    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
281  42    FETCH_CONSTANT/99         #232=     ?0                   270:'PHP_BIN'       	;16
282  42    CONCAT/8                  #233=     273:'sudo -u xui '   #232                	;0
283  42    CONCAT/8                  #234=     #233                 274:' '             	;0
284  42    FETCH_CONSTANT/99         #235=     ?0                   275:'CLI_PATH'      	;16
285  42    CONCAT/8                  #236=     #234                 #235                	;0
286  42    CONCAT/8                  #237=     #236                 278:'startup.php'   	;0
287  42    SEND_VAL_EX/116           ?96       #237                 ?2                  	;0
288  42    DO_FCALL_BY_NAME/131      ?200      ?0                   ?0                  	;0
289  43    INIT_FCALL_BY_NAME/59     ?0        ?0                   279:'e04601C350efBe4B'	;2
290  43    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
291  43    FETCH_CONSTANT/99         #239=     ?0                   281:'PHP_BIN'       	;16
292  43    CONCAT/8                  #240=     284:'sudo -u xui '   #239                	;0
293  43    CONCAT/8                  #241=     #240                 285:' '             	;0
294  43    FETCH_CONSTANT/99         #242=     ?0                   286:'CRON_PATH'     	;16
295  43    CONCAT/8                  #243=     #241                 #242                	;0
296  43    CONCAT/8                  #244=     #243                 289:'servers.php'   	;0
297  43    SEND_VAL_EX/116           ?96       #244                 ?2                  	;0
298  43    DO_FCALL_BY_NAME/131      ?207      ?0                   ?0                  	;0
299  45    GOTO/253                  ?0        ?300                 ?290                	;0
300  47    GOTO/253                  ?0        ?750                 ?291                	;0
301  49    INIT_FCALL_BY_NAME/59     ?0        ?0                   292:'E04601c350EFBe4b'	;2
302  49    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
303  49    FETCH_CONSTANT/99         #246=     ?0                   294:'XUI_HOME'      	;16
304  49    CONCAT/8                  #247=     297:'sudo '          #246                	;0
305  49    CONCAT/8                  #248=     #247                 298:'status 1'      	;0
306  49    SEND_VAL_EX/116           ?96       #248                 ?2                  	;0
307  49    DO_FCALL_BY_NAME/131      ?211      ?0                   ?0                  	;0
308  50    INIT_FCALL_BY_NAME/59     ?0        ?0                   299:'e04601c350efBe4B'	;2
309  50    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
310  50    FETCH_CONSTANT/99         #250=     ?0                   301:'PHP_BIN'       	;16
311  50    CONCAT/8                  #251=     304:'sudo -u xui '   #250                	;0
312  50    CONCAT/8                  #252=     #251                 305:' '             	;0
313  50    FETCH_CONSTANT/99         #253=     ?0                   306:'CLI_PATH'      	;16
314  50    CONCAT/8                  #254=     #252                 #253                	;0
315  50    CONCAT/8                  #255=     #254                 309:'startup.php'   	;0
316  50    SEND_VAL_EX/116           ?96       #255                 ?2                  	;0
317  50    DO_FCALL_BY_NAME/131      ?218      ?0                   ?0                  	;0
318  51    INIT_FCALL_BY_NAME/59     ?0        ?0                   310:'e04601C350eFBe4B'	;2
319  51    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
320  51    FETCH_CONSTANT/99         #257=     ?0                   312:'PHP_BIN'       	;16
321  51    CONCAT/8                  #258=     315:'sudo -u xui '   #257                	;0
322  51    CONCAT/8                  #259=     #258                 316:' '             	;0
323  51    FETCH_CONSTANT/99         #260=     ?0                   317:'CRON_PATH'     	;16
324  51    CONCAT/8                  #261=     #259                 #260                	;0
325  51    CONCAT/8                  #262=     #261                 320:'servers.php'   	;0
326  51    SEND_VAL_EX/116           ?96       #262                 ?2                  	;0
327  51    DO_FCALL_BY_NAME/131      ?225      ?0                   ?0                  	;0
328  52    GOTO/253                  ?0        ?750                 ?321                	;0
329  54    INIT_FCALL_BY_NAME/59     ?0        ?0                   322:'e04601c350efbE4B'	;2
330  54    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
331  54    FETCH_CONSTANT/99         #264=     ?0                   324:'STREAMS_PATH'  	;16
332  54    CONCAT/8                  #265=     327:'sudo echo "tmpfs ' #264                	;0
333  54    CONCAT/8                  #266=     #265                 328:' tmpfs defaults,noatime,nosuid,nodev,noexec,mode=1777,size=90% 0 0" >> /etc/fstab'	;0
334  54    SEND_VAL_EX/116           ?96       #266                 ?2                  	;0
335  54    DO_FCALL_BY_NAME/131      ?229      ?0                   ?0                  	;0
336  55    INIT_FCALL_BY_NAME/59     ?0        ?0                   329:'E04601C350eFbe4b'	;2
337  55    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
338  55    FETCH_CONSTANT/99         #268=     ?0                   331:'TMP_PATH'      	;16
339  55    CONCAT/8                  #269=     334:'sudo echo "tmpfs ' #268                	;0
340  55    CONCAT/8                  #270=     #269                 335:' tmpfs defaults,noatime,nosuid,nodev,noexec,mode=1777,size=2G 0 0" >> /etc/fstab'	;0
341  55    SEND_VAL_EX/116           ?96       #270                 ?2                  	;0
342  55    DO_FCALL_BY_NAME/131      ?233      ?0                   ?0                  	;0
343  57    INIT_FCALL_BY_NAME/59     ?0        ?0                   336:'stripos'       	;2
344  57    INIT_FCALL_BY_NAME/59     ?0        ?0                   338:'e04601C350efbE4B'	;2
345  57    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
346  57    SEND_VAL_EX/116           ?96       340:'sudo cat /etc/sysctl.conf' ?2                  	;0
347  57    DO_FCALL_BY_NAME/131      $272=     ?0                   ?0                  	;0
348  57    SEPARATE/156              $272=     $272                 ?0                  	;0
349  57    FETCH_DIM_FUNC_ARG/93     $273=     $272                 341:'output'        	;1
350  57    SEND_VAR_EX/66            ?80       $273                 ?1                  	;0
351  57    SEND_VAL_EX/116           ?96       342:'XUI.one'        ?2                  	;0
352  57    DO_FCALL_BY_NAME/131      $274=     ?0                   ?0                  	;0
353  57    IS_IDENTICAL/15           #275=     $274                 343:false           	;0
354  57    JMPZ/43                   ?0        #275                 ?356                	;0	>>356
355  58    GOTO/253                  ?0        ?659                 ?344                	;0
356  60    BOOL_NOT/13               #276=     16?2                 ?0                  	;0	<<354
357  60    JMPZ/43                   ?0        #276                 ?359                	;0	>>359
358  61    GOTO/253                  ?0        ?1221                ?345                	;0
359  63    GOTO/253                  ?0        ?1213                ?346                	;0	<<357
360  66    JMPZ/43                   ?0        16?3                 ?362                	;0	>>362
361  67    GOTO/253                  ?0        ?380                 ?347                	;0
362  69    FETCH_CONSTANT/99         #278=     ?0                   351:'SERVER_ID'     	;16	<<360
363  69    FETCH_STATIC_PROP_R/173   $277=     348:'rServers'       349:'XUI'           	;0
364  69    FETCH_DIM_R/81            $279=     $277                 #278                	;0
365  69    FETCH_DIM_R/81            $280=     $279                 354:'server_ip'     	;0
366  69    CONCAT/8                  #281=     355:'; XUI Configuration
; -----------------

[XUI]
hostname    =   "' $280                	;0
367  69    CONCAT/8                  #282=     #281                 356:'"
port        =   '	;0
368  69    INIT_FCALL_BY_NAME/59     ?0        ?0                   357:'intval'        	;1
369  69    FETCH_CONSTANT/99         #284=     ?0                   362:'SERVER_ID'     	;16
370  69    FETCH_STATIC_PROP_FUNC_ARG/177 $283=     359:'rServers'       360:'XUI'           	;1
371  69    FETCH_DIM_FUNC_ARG/93     $285=     $283                 #284                	;1
372  69    FETCH_DIM_FUNC_ARG/93     $286=     $285                 365:'http_broadcast_port'	;1
373  69    SEND_VAR_EX/66            ?80       $286                 ?1                  	;0
374  69    DO_FCALL_BY_NAME/131      $287=     ?0                   ?0                  	;0
375  69    CONCAT/8                  #288=     #282                 $287                	;0
376  69    CONCAT/8                  #289=     #288                 366:'
server_id   =   '	;0
377  69    CONCAT/8                  #290=     #289                 16?13               	;0
378  69    ASSIGN/38                 ?253      16?14                #290                	;0
379  70    GOTO/253                  ?0        ?802                 ?367                	;0
380  72    GOTO/253                  ?0        ?785                 ?368                	;0
381  74    ECHO/40                   ?0        369:'Failed to connect to server. Exiting
' ?0                  	;0
382  75    EXIT/79                   ?0        ?0                   ?0                  	;0
383  76    GOTO/253                  ?0        ?832                 ?370                	;0
384  78    IS_EQUAL/17               #292=     16?15                371:'root'          	;0
385  78    JMPZ/43                   ?0        #292                 ?387                	;0	>>387
386  79    GOTO/253                  ?0        ?562                 ?372                	;0
387  81    GOTO/253                  ?0        ?560                 ?373                	;0	<<385
388  84    GOTO/253                  ?0        ?1156                ?374                	;0
389  86    INIT_FCALL_BY_NAME/59     ?0        ?0                   375:'E04601c350EFBE4B'	;2
390  86    SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
391  86    SEND_VAL_EX/116           ?96       377:'sudo rm /home/xui/bin/nginx/conf/servers/*.conf' ?2                  	;0
392  86    DO_FCALL_BY_NAME/131      ?255      ?0                   ?0                  	;0
393  87    FE_RESET_R/77             $294=     16?4                 ?480                	;0
394  87    FE_FETCH_R/78             ?0        $294                 16?16               	;480	>>480	<<479
395  88    NOP/0                     ?0        ?0                   ?0                  	;1
396  88    GOTO/253                  ?0        ?397                 ?378                	;0
397  90    JMPZ/43                   ?0        16?3                 ?400                	;0	>>400
398  91    NOP/0                     ?0        ?0                   ?0                  	;1
399  91    GOTO/253                  ?0        ?411                 ?379                	;0
400  93    FETCH_STATIC_PROP_R/173   $295=     380:'rServers'       381:'XUI'           	;0	<<397
401  93    FETCH_DIM_R/81            $296=     $295                 16?16               	;0
402  93    FETCH_DIM_R/81            $297=     $296                 383:'server_ip'     	;0
403  93    CONCAT/8                  #298=     $297                 384:':'             	;0
404  93    FETCH_STATIC_PROP_R/173   $299=     385:'rServers'       386:'XUI'           	;0
405  93    FETCH_DIM_R/81            $300=     $299                 16?16               	;0
406  93    FETCH_DIM_R/81            $301=     $300                 388:'http_broadcast_port'	;0
407  93    CONCAT/8                  #302=     #298                 $301                	;0
408  93    ASSIGN/38                 ?265      16?17                #302                	;0
409  94    NOP/0                     ?0        ?0                   ?0                  	;1
410  94    GOTO/253                  ?0        ?453                 ?389                	;0
411  96    FETCH_STATIC_PROP_R/173   $304=     390:'rServers'       391:'XUI'           	;0
412  96    FETCH_DIM_R/81            $305=     $304                 16?16               	;0
413  96    FETCH_DIM_R/81            $306=     $305                 393:'private_ip'    	;0
414  96    CONCAT/8                  #307=     $306                 394:':'             	;0
415  96    FETCH_STATIC_PROP_R/173   $308=     395:'rServers'       396:'XUI'           	;0
416  96    FETCH_DIM_R/81            $309=     $308                 16?16               	;0
417  96    FETCH_DIM_R/81            $310=     $309                 398:'http_broadcast_port'	;0
418  96    CONCAT/8                  #311=     #307                 $310                	;0
419  96    ASSIGN/38                 ?274      16?17                #311                	;0
420  97    NOP/0                     ?0        ?0                   ?0                  	;1
421  97    GOTO/253                  ?0        ?453                 ?399                	;0
422  100   CONCAT/8                  #313=     400:'location / {
    include options.conf;
    proxy_pass http://' 16?17               	;0
423  100   CONCAT/8                  #314=     #313                 401:'$1;
}'         	;0
424  100   ASSIGN/38                 ?277      16?18                #314                	;0
425  102   FETCH_CONSTANT/99         #316=     ?0                   402:'TMP_PATH'      	;16
426  102   INIT_FCALL_BY_NAME/59     ?0        ?0                   405:'md5'           	;1
427  102   INIT_FCALL_BY_NAME/59     ?0        ?0                   407:'time'          	;0
428  102   DO_FCALL_BY_NAME/131      $317=     ?0                   ?0                  	;0
429  102   CONCAT/8                  #318=     $317                 16?19               	;0
430  102   CONCAT/8                  #319=     #318                 409:'.conf'         	;0
431  102   SEND_VAL_EX/116           ?80       #319                 ?1                  	;0
432  102   DO_FCALL_BY_NAME/131      $320=     ?0                   ?0                  	;0
433  102   CONCAT/8                  #321=     #316                 $320                	;0
434  102   ASSIGN/38                 ?284      16?10                #321                	;0
435  103   INIT_FCALL_BY_NAME/59     ?0        ?0                   410:'file_put_contents'	;2
436  103   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
437  103   SEND_VAR_EX/66            ?96       16?18                ?2                  	;0
438  103   DO_FCALL_BY_NAME/131      ?285      ?0                   ?0                  	;0
439  104   NOP/0                     ?0        ?0                   ?0                  	;1
440  104   GOTO/253                  ?0        ?441                 ?412                	;0
441  106   INIT_FCALL_BY_NAME/59     ?0        ?0                   413:'sendFile'      	;3
442  106   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
443  106   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
444  106   INIT_FCALL_BY_NAME/59     ?0        ?0                   415:'intval'        	;1
445  106   SEND_VAR_EX/66            ?80       16?16                ?1                  	;0
446  106   DO_FCALL_BY_NAME/131      $324=     ?0                   ?0                  	;0
447  106   CONCAT/8                  #325=     417:'/home/xui/bin/nginx/conf/servers/' $324                	;0
448  106   CONCAT/8                  #326=     #325                 418:'.conf'         	;0
449  106   SEND_VAL_EX/116           ?112      #326                 ?3                  	;0
450  106   DO_FCALL_BY_NAME/131      ?289      ?0                   ?0                  	;0
451  108   NOP/0                     ?0        ?0                   ?0                  	;1
452  108   GOTO/253                  ?0        ?479                 ?419                	;0
453  111   FETCH_STATIC_PROP_R/173   $328=     420:'rServers'       421:'XUI'           	;0
454  111   FETCH_DIM_R/81            $329=     $328                 16?16               	;0
455  111   FETCH_DIM_R/81            $330=     $329                 423:'is_main'       	;0
456  111   JMPZ/43                   ?0        $330                 ?459                	;0	>>459
457  112   NOP/0                     ?0        ?0                   ?0                  	;1
458  112   GOTO/253                  ?0        ?422                 ?424                	;0
459  114   INIT_FCALL_BY_NAME/59     ?0        ?0                   425:'md5'           	;1	<<456
460  114   CONCAT/8                  #331=     16?13                427:'_'             	;0
461  114   CONCAT/8                  #332=     #331                 16?16               	;0
462  114   CONCAT/8                  #333=     #332                 428:'_'             	;0
463  114   FETCH_CONSTANT/99         #334=     ?0                   429:'OPENSSL_EXTRA' 	;16
464  114   CONCAT/8                  #335=     #333                 #334                	;0
465  114   SEND_VAL_EX/116           ?80       #335                 ?1                  	;0
466  114   DO_FCALL_BY_NAME/131      $336=     ?0                   ?0                  	;0
467  114   ASSIGN/38                 ?299      16?19                $336                	;0
468  115   CONCAT/8                  #338=     432:'location ~/'    16?19               	;0
469  115   CONCAT/8                  #339=     #338                 433:'(.*)$ {
    include options.conf;
    proxy_pass http://'	;0
470  115   CONCAT/8                  #340=     #339                 16?17               	;0
471  115   CONCAT/8                  #341=     #340                 434:'$1;
    proxy_set_header X-Token "'	;0
472  115   CONCAT/8                  #342=     #341                 16?19               	;0
473  115   CONCAT/8                  #343=     #342                 435:'";
}'          	;0
474  115   ASSIGN/38                 ?306      16?18                #343                	;0
475  116   NOP/0                     ?0        ?0                   ?0                  	;1
476  116   GOTO/253                  ?0        ?425                 ?436                	;0
477  117   NOP/0                     ?0        ?0                   ?0                  	;1
478  117   GOTO/253                  ?0        ?422                 ?437                	;0
479  118   JMP/42                    ?0        ?394                 ?0                  	;0	>>394
480  118   FE_FREE/127               ?0        $294                 ?0                  	;0	<<393
481  120   GOTO/253                  ?0        ?1138                ?438                	;0
482  122   IS_EQUAL/17               #345=     16?20                439:2               	;0
483  122   JMPZ/43                   ?0        #345                 ?485                	;0	>>485
484  123   GOTO/253                  ?0        ?301                 ?440                	;0
485  125   IS_EQUAL/17               #346=     16?20                441:3               	;0	<<483
486  125   JMPZ/43                   ?0        #346                 ?488                	;0	>>488
487  126   GOTO/253                  ?0        ?499                 ?442                	;0
488  128   INIT_FCALL_BY_NAME/59     ?0        ?0                   443:'E04601c350efbE4b'	;2	<<486
489  128   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
490  128   FETCH_CONSTANT/99         #347=     ?0                   445:'PHP_BIN'       	;16
491  128   CONCAT/8                  #348=     448:'sudo -u xui '   #347                	;0
492  128   CONCAT/8                  #349=     #348                 449:' '             	;0
493  128   FETCH_CONSTANT/99         #350=     ?0                   450:'INCLUDES_PATH' 	;16
494  128   CONCAT/8                  #351=     #349                 #350                	;0
495  128   CONCAT/8                  #352=     #351                 453:'startup.php'   	;0
496  128   SEND_VAL_EX/116           ?96       #352                 ?2                  	;0
497  128   DO_FCALL_BY_NAME/131      ?315      ?0                   ?0                  	;0
498  129   GOTO/253                  ?0        ?299                 ?454                	;0
499  131   GOTO/253                  ?0        ?262                 ?455                	;0
500  133   INIT_FCALL_BY_NAME/59     ?0        ?0                   456:'E04601C350EfBE4b'	;2
501  133   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
502  133   SEND_VAL_EX/116           ?96       458:'sudo echo "" > "/home/xui/bin/nginx/conf/limit.conf"' ?2                  	;0
503  133   DO_FCALL_BY_NAME/131      ?316      ?0                   ?0                  	;0
504  134   INIT_FCALL_BY_NAME/59     ?0        ?0                   459:'e04601c350EFBe4B'	;2
505  134   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
506  134   SEND_VAL_EX/116           ?96       461:'sudo echo "" > "/home/xui/bin/nginx/conf/limit_queue.conf"' ?2                  	;0
507  134   DO_FCALL_BY_NAME/131      ?317      ?0                   ?0                  	;0
508  135   IS_EQUAL/17               #356=     16?20                462:2               	;0
509  135   BOOL_NOT/13               #357=     #356                 ?0                  	;0
510  135   JMPZ/43                   ?0        #357                 ?512                	;0	>>512
511  136   GOTO/253                  ?0        ?388                 ?463                	;0
512  138   FETCH_STATIC_PROP_R/173   $358=     464:'rServers'       465:'XUI'           	;0	<<510
513  138   FETCH_DIM_R/81            $359=     $358                 16?13               	;0
514  138   FETCH_DIM_R/81            $360=     $359                 467:'http_broadcast_port'	;0
515  138   CONCAT/8                  #361=     468:'127.0.0.1:'     $360                	;0
516  138   ASSIGN/38                 ?324      16?17                #361                	;0
517  139   INIT_FCALL_BY_NAME/59     ?0        ?0                   469:'E04601C350eFBE4b'	;2
518  139   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
519  139   ROPE_INIT/54              #364=     ?0                   471:'sudo echo "on_play http://'	;7
520  139   ROPE_ADD/55               #364=     #364                 16?17               	;1
521  139   ROPE_ADD/55               #364=     #364                 472:'/stream/rtmp; on_publish http://'	;2
522  139   ROPE_ADD/55               #364=     #364                 16?17               	;3
523  139   ROPE_ADD/55               #364=     #364                 473:'/stream/rtmp; on_play_done http://'	;4
524  139   ROPE_ADD/55               #364=     #364                 16?17               	;5
525  139   ROPE_END/56               #363=     #364                 474:'/stream/rtmp;" > "/home/xui/bin/nginx_rtmp/conf/live.conf"'	;6
526  139   SEND_VAL_EX/116           ?96       #363                 ?2                  	;0
527  139   DO_FCALL_BY_NAME/131      ?330      ?0                   ?0                  	;0
528  140   GOTO/253                  ?0        ?234                 ?475                	;0
529  142   GOTO/253                  ?0        ?832                 ?476                	;0
530  144   ECHO/40                   ?0        477:'
Stopping any previous version of XUI
' ?0                  	;0
531  145   INIT_FCALL_BY_NAME/59     ?0        ?0                   478:'e04601c350eFbe4B'	;2
532  145   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
533  145   SEND_VAL_EX/116           ?96       480:'sudo systemctl stop xuione' ?2                  	;0
534  145   DO_FCALL_BY_NAME/131      ?331      ?0                   ?0                  	;0
535  146   INIT_FCALL_BY_NAME/59     ?0        ?0                   481:'E04601c350EFbE4b'	;2
536  146   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
537  146   SEND_VAL_EX/116           ?96       483:'sudo killall -9 -u xui' ?2                  	;0
538  146   DO_FCALL_BY_NAME/131      ?332      ?0                   ?0                  	;0
539  147   GOTO/253                  ?0        ?630                 ?484                	;0
540  150   INIT_FCALL_BY_NAME/59     ?0        ?0                   485:'intval'        	;1
541  150   FETCH_DIM_FUNC_ARG/93     $371=     16?1                 487:3               	;1
542  150   SEND_VAR_EX/66            ?80       $371                 ?1                  	;0
543  150   DO_FCALL_BY_NAME/131      $372=     ?0                   ?0                  	;0
544  150   ASSIGN/38                 ?335      16?21                $372                	;0
545  151   FETCH_DIM_R/81            $374=     16?1                 488:4               	;0
546  151   ASSIGN/38                 ?337      16?15                $374                	;0
547  152   FETCH_DIM_R/81            $376=     16?1                 489:5               	;0
548  152   ASSIGN/38                 ?339      16?22                $376                	;0
549  153   ISSET_ISEMPTY_DIM_OBJ/115 #378=     16?1                 490:6               	;16777216
550  153   JMPZ/43                   ?0        #378                 ?553                	;0	>>553
551  153   QM_ASSIGN/22              #379=     491:80               ?0                  	;0
552  153   JMP/42                    ?0        ?558                 ?0                  	;0	>>558
553  153   INIT_FCALL_BY_NAME/59     ?0        ?0                   492:'intval'        	;1	<<550
554  153   FETCH_DIM_FUNC_ARG/93     $380=     16?1                 494:6               	;1
555  153   SEND_VAR_EX/66            ?80       $380                 ?1                  	;0
556  153   DO_FCALL_BY_NAME/131      $381=     ?0                   ?0                  	;0
557  153   QM_ASSIGN/22              #379=     $381                 ?0                  	;0
558  153   ASSIGN/38                 ?344      16?23                #379                	;0	<<552
559  154   GOTO/253                  ?0        ?1                   ?495                	;0
560  156   ECHO/40                   ?0        496:'Connected! Authenticating as non-root user...
' ?0                  	;0
561  157   GOTO/253                  ?0        ?563                 ?497                	;0
562  159   ECHO/40                   ?0        498:'Connected! Authenticating as root user...
' ?0                  	;0
563  161   GOTO/253                  ?0        ?725                 ?499                	;0
564  163   INIT_FCALL_BY_NAME/59     ?0        ?0                   500:'e04601c350EfBE4b'	;2
565  163   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
566  163   SEND_VAL_EX/116           ?96       502:'sudo adduser --system --shell /bin/false --group --disabled-login xui' ?2                  	;0
567  163   DO_FCALL_BY_NAME/131      ?345      ?0                   ?0                  	;0
568  164   INIT_FCALL_BY_NAME/59     ?0        ?0                   503:'e04601c350EFbE4b'	;2
569  164   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
570  164   FETCH_CONSTANT/99         #384=     ?0                   505:'XUI_HOME'      	;16
571  164   CONCAT/8                  #385=     508:'sudo mkdir '    #384                	;0
572  164   SEND_VAL_EX/116           ?96       #385                 ?2                  	;0
573  164   DO_FCALL_BY_NAME/131      ?348      ?0                   ?0                  	;0
574  165   INIT_FCALL_BY_NAME/59     ?0        ?0                   509:'e04601c350eFBE4B'	;2
575  165   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
576  165   FETCH_CONSTANT/99         #387=     ?0                   511:'BIN_PATH'      	;16
577  165   CONCAT/8                  #388=     514:'sudo rm -rf '   #387                	;0
578  165   SEND_VAL_EX/116           ?96       #388                 ?2                  	;0
579  165   DO_FCALL_BY_NAME/131      ?351      ?0                   ?0                  	;0
580  167   ASSIGN/38                 ?352      16?7                 515:0               	;0
581  168   GOTO/253                  ?0        ?845                 ?516                	;0
582  170   ECHO/40                   ?0        517:'Installing service
' ?0                  	;0
583  171   INIT_FCALL_BY_NAME/59     ?0        ?0                   518:'E04601C350EfBE4B'	;2
584  171   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
585  171   SEND_VAL_EX/116           ?96       520:'sudo rm /etc/systemd/system/xui.service' ?2                  	;0
586  171   DO_FCALL_BY_NAME/131      ?353      ?0                   ?0                  	;0
587  172   ASSIGN/38                 ?354      16?24                521:'[Unit]
SourcePath=/home/xui/service
Description=XUI.one Service
After=network.target
StartLimitIntervalSec=0

[Service]
Type=simple
User=root
Restart=always
RestartSec=1
ExecStart=/bin/bash /home/xui/service start
ExecRestart=/bin/bash /home/xui/service restart
ExecStop=/bin/bash /home/xui/service stop

[Install]
WantedBy=multi-user.target'	;0
588  173   INIT_FCALL_BY_NAME/59     ?0        ?0                   522:'file_put_contents'	;2
589  173   FETCH_CONSTANT/99         #393=     ?0                   524:'TMP_PATH'      	;16
590  173   CONCAT/8                  #394=     #393                 527:'systemd_'      	;0
591  173   CONCAT/8                  #395=     #394                 16?13               	;0
592  173   SEND_VAL_EX/116           ?80       #395                 ?1                  	;0
593  173   SEND_VAR_EX/66            ?96       16?24                ?2                  	;0
594  173   DO_FCALL_BY_NAME/131      ?358      ?0                   ?0                  	;0
595  174   INIT_FCALL_BY_NAME/59     ?0        ?0                   528:'sendFile'      	;3
596  174   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
597  174   FETCH_CONSTANT/99         #397=     ?0                   530:'TMP_PATH'      	;16
598  174   CONCAT/8                  #398=     #397                 533:'systemd_'      	;0
599  174   CONCAT/8                  #399=     #398                 16?13               	;0
600  174   SEND_VAL_EX/116           ?96       #399                 ?2                  	;0
601  174   SEND_VAL_EX/116           ?112      534:'/etc/systemd/system/xuione.service' ?3                  	;0
602  174   DO_FCALL_BY_NAME/131      ?362      ?0                   ?0                  	;0
603  175   GOTO/253                  ?0        ?997                 ?535                	;0
604  177   INIT_FCALL_BY_NAME/59     ?0        ?0                   536:'unlink'        	;1
605  177   FETCH_CONSTANT/99         #401=     ?0                   538:'CACHE_TMP_PATH'	;16
606  177   CONCAT/8                  #402=     #401                 541:'servers'       	;0
607  177   SEND_VAL_EX/116           ?80       #402                 ?1                  	;0
608  177   DO_FCALL_BY_NAME/131      ?365      ?0                   ?0                  	;0
609  178   INIT_STATIC_METHOD_CALL/113 ?0        545:'XUI'            547:'f76008f8Dfe1898C'	;0
610  178   DO_FCALL/60               $405=     ?0                   ?0                  	;0
611  178   FETCH_STATIC_PROP_W/174   $404=     542:'rServers'       543:'XUI'           	;0
612  178   ASSIGN/38                 ?368      $404                 $405                	;0
613  179   INIT_FCALL_BY_NAME/59     ?0        ?0                   549:'intval'        	;1
614  179   FETCH_DIM_FUNC_ARG/93     $407=     16?1                 551:1               	;1
615  179   SEND_VAR_EX/66            ?80       $407                 ?1                  	;0
616  179   DO_FCALL_BY_NAME/131      $408=     ?0                   ?0                  	;0
617  179   ASSIGN/38                 ?371      16?20                $408                	;0
618  180   IS_NOT_EQUAL/18           #410=     16?20                552:1               	;0
619  180   JMPZ_EX/46                #410=     #410                 ?625                	;0	>>625
620  180   INIT_STATIC_METHOD_CALL/113 ?0        553:'Xui\\Functions' 555:'getLicense'    	;0
621  180   DO_FCALL/60               $411=     ?0                   ?0                  	;0
622  180   FETCH_DIM_R/81            $412=     $411                 557:9               	;0
623  180   IS_EQUAL/17               #413=     $412                 558:1               	;0
624  180   BOOL/52                   #410=     #413                 ?0                  	;0
625  180   BOOL_NOT/13               #414=     #410                 ?0                  	;0	<<619
626  180   JMPZ/43                   ?0        #414                 ?628                	;0	>>628
627  181   GOTO/253                  ?0        ?540                 ?559                	;0
628  183   EXIT/79                   ?0        560:'Not supported in Trial Mode.
' ?0                  	;0	<<626
629  184   GOTO/253                  ?0        ?540                 ?561                	;0
630  186   ECHO/40                   ?0        562:'
Updating system
' ?0                  	;0
631  187   INIT_FCALL_BY_NAME/59     ?0        ?0                   563:'e04601c350EFbe4b'	;2
632  187   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
633  187   SEND_VAL_EX/116           ?96       565:'sudo rm /var/lib/dpkg/lock-frontend && sudo rm /var/cache/apt/archives/lock && sudo rm /var/lib/dpkg/lock' ?2                  	;0
634  187   DO_FCALL_BY_NAME/131      ?377      ?0                   ?0                  	;0
635  188   IS_EQUAL/17               #416=     16?20                566:2               	;0
636  188   BOOL_NOT/13               #417=     #416                 ?0                  	;0
637  188   JMPZ/43                   ?0        #417                 ?639                	;0	>>639
638  189   GOTO/253                  ?0        ?643                 ?567                	;0
639  191   INIT_FCALL_BY_NAME/59     ?0        ?0                   568:'e04601c350EfbE4B'	;2	<<637
640  191   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
641  191   SEND_VAL_EX/116           ?96       570:'sudo add-apt-repository -y ppa:maxmind/ppa' ?2                  	;0
642  191   DO_FCALL_BY_NAME/131      ?380      ?0                   ?0                  	;0
643  193   GOTO/253                  ?0        ?1186                ?571                	;0
644  195   FETCH_CONSTANT/99         #419=     ?0                   572:'BIN_PATH'      	;16
645  195   CONCAT/8                  #420=     #419                 575:'install/'      	;0
646  195   ASSIGN/38                 ?383      16?25                #420                	;0
647  196   ASSIGN/38                 ?384      16?26                576:array (
  'lb' => 'loadbalancer.tar.gz',
  'lb_update' => 'loadbalancer_update.tar.gz',
  'proxy' => 'proxy.tar.gz',
)	;0
648  197   IS_EQUAL/17               #423=     16?20                577:1               	;0
649  197   JMPZ/43                   ?0        #423                 ?651                	;0	>>651
650  198   GOTO/253                  ?0        ?675                 ?578                	;0
651  200   IS_EQUAL/17               #424=     16?20                579:2               	;0	<<649
652  200   JMPZ/43                   ?0        #424                 ?654                	;0	>>654
653  201   GOTO/253                  ?0        ?1185                ?580                	;0
654  203   IS_EQUAL/17               #425=     16?20                581:3               	;0	<<652
655  203   JMPZ/43                   ?0        #425                 ?657                	;0	>>657
656  204   GOTO/253                  ?0        ?749                 ?582                	;0
657  206   GOTO/253                  ?0        ?742                 ?583                	;0	<<655
658  208   GOTO/253                  ?0        ?844                 ?584                	;0
659  210   JMPZ/43                   ?0        16?2                 ?661                	;0	>>661
660  211   GOTO/253                  ?0        ?213                 ?585                	;0
661  213   INIT_FCALL_BY_NAME/59     ?0        ?0                   586:'e04601c350EFbe4B'	;2	<<659
662  213   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
663  213   FETCH_CONSTANT/99         #426=     ?0                   588:'CONFIG_PATH'   	;16
664  213   CONCAT/8                  #427=     591:'sudo rm '       #426                	;0
665  213   CONCAT/8                  #428=     #427                 592:'sysctl.on'     	;0
666  213   SEND_VAL_EX/116           ?96       #428                 ?2                  	;0
667  213   DO_FCALL_BY_NAME/131      ?391      ?0                   ?0                  	;0
668  214   GOTO/253                  ?0        ?844                 ?593                	;0
669  215   GOTO/253                  ?0        ?213                 ?594                	;0
670  217   ASSIGN/38                 ?392      16?27                595:array (
  0 => 'cpufrequtils',
  1 => 'iproute2',
  2 => 'python',
  3 => 'net-tools',
  4 => 'dirmngr',
  5 => 'gpg-agent',
  6 => 'software-properties-common',
  7 => 'libmaxminddb0',
  8 => 'libmaxminddb-dev',
  9 => 'mmdb-bin',
  10 => 'libcurl4',
  11 => 'libgeoip-dev',
  12 => 'libxslt1-dev',
  13 => 'libonig-dev',
  14 => 'e2fsprogs',
  15 => 'wget',
  16 => 'sysstat',
  17 => 'alsa-utils',
  18 => 'v4l-utils',
  19 => 'mcrypt',
  20 => 'python3',
  21 => 'certbot',
  22 => 'iptables-persistent',
  23 => 'libjpeg-dev',
  24 => 'libpng-dev',
  25 => 'php-ssh2',
  26 => 'xz-utils',
  27 => 'zip',
  28 => 'unzip',
)	;0
671  218   FETCH_DIM_R/81            $431=     16?26                596:'lb'            	;0
672  218   INIT_ARRAY/71             #432=     $431                 ?0                  	;4
673  218   ASSIGN/38                 ?395      16?28                #432                	;0
674  220   GOTO/253                  ?0        ?1135                ?597                	;0
675  222   GOTO/253                  ?0        ?1131                ?598                	;0
676  224   ECHO/40                   ?0        599:'Generating configuration file
' ?0                  	;0
677  225   INIT_FCALL_BY_NAME/59     ?0        ?0                   600:'parse_ini_file'	;1
678  225   FETCH_CONSTANT/99         #434=     ?0                   602:'CONFIG_PATH'   	;16
679  225   CONCAT/8                  #435=     #434                 605:'config.ini'    	;0
680  225   SEND_VAL_EX/116           ?80       #435                 ?1                  	;0
681  225   DO_FCALL_BY_NAME/131      $436=     ?0                   ?0                  	;0
682  225   ASSIGN/38                 ?399      16?29                $436                	;0
683  226   IS_EQUAL/17               #438=     16?20                606:1               	;0
684  226   JMPZ/43                   ?0        #438                 ?686                	;0	>>686
685  227   GOTO/253                  ?0        ?360                 ?607                	;0
686  229   FETCH_CONSTANT/99         #440=     ?0                   611:'SERVER_ID'     	;16	<<684
687  229   FETCH_STATIC_PROP_R/173   $439=     608:'rServers'       609:'XUI'           	;0
688  229   FETCH_DIM_R/81            $441=     $439                 #440                	;0
689  229   FETCH_DIM_R/81            $442=     $441                 614:'server_ip'     	;0
690  229   CONCAT/8                  #443=     615:'; XUI Configuration
; -----------------
; Your username and password will be encrypted and
; saved to the \'credentials\' file in this folder
; automatically.
;
; To change your username or password, modify BOTH
; below and XUI will read and re-encrypt them.

[XUI]
hostname    =   "' $442                	;0
691  229   CONCAT/8                  #444=     #443                 616:'"
database    =   "xui"
port        =   '	;0
692  229   INIT_FCALL_BY_NAME/59     ?0        ?0                   617:'intval'        	;1
693  229   FETCH_STATIC_PROP_FUNC_ARG/177 $445=     619:'rConfig'        620:'XUI'           	;1
694  229   FETCH_DIM_FUNC_ARG/93     $446=     $445                 622:'port'          	;1
695  229   SEND_VAR_EX/66            ?80       $446                 ?1                  	;0
696  229   DO_FCALL_BY_NAME/131      $447=     ?0                   ?0                  	;0
697  229   CONCAT/8                  #448=     #444                 $447                	;0
698  229   CONCAT/8                  #449=     #448                 623:'
server_id   =   '	;0
699  229   CONCAT/8                  #450=     #449                 16?13               	;0
700  229   CONCAT/8                  #451=     #450                 624:'
is_lb       =   1

[Encrypted]
username    =   ""
password    =   ""'	;0
701  229   ASSIGN/38                 ?414      16?14                #451                	;0
702  230   GOTO/253                  ?0        ?802                 ?625                	;0
703  231   GOTO/253                  ?0        ?360                 ?626                	;0
704  233   INIT_FCALL_BY_NAME/59     ?0        ?0                   627:'strpos'        	;2
705  233   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
706  233   SEND_VAL_EX/116           ?96       629:'nDefaultLimitNOFILESoft=1048576' ?2                  	;0
707  233   DO_FCALL_BY_NAME/131      $453=     ?0                   ?0                  	;0
708  233   IS_IDENTICAL/15           #454=     $453                 630:false           	;0
709  233   BOOL_NOT/13               #455=     #454                 ?0                  	;0
710  233   JMPZ/43                   ?0        #455                 ?712                	;0	>>712
711  234   GOTO/253                  ?0        ?720                 ?631                	;0
712  236   INIT_FCALL_BY_NAME/59     ?0        ?0                   632:'E04601C350EFBE4B'	;2	<<710
713  236   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
714  236   SEND_VAL_EX/116           ?96       634:'sudo echo "
DefaultLimitNOFILESoft=1048576" >> "/etc/systemd/system.conf"' ?2                  	;0
715  236   DO_FCALL_BY_NAME/131      ?418      ?0                   ?0                  	;0
716  237   INIT_FCALL_BY_NAME/59     ?0        ?0                   635:'E04601c350efbe4B'	;2
717  237   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
718  237   SEND_VAL_EX/116           ?96       637:'sudo echo "
DefaultLimitNOFILESoft=1048576" >> "/etc/systemd/user.conf"' ?2                  	;0
719  237   DO_FCALL_BY_NAME/131      ?419      ?0                   ?0                  	;0
720  239   INIT_FCALL_BY_NAME/59     ?0        ?0                   638:'E04601c350eFbe4b'	;2
721  239   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
722  239   SEND_VAL_EX/116           ?96       640:'sudo systemctl stop apparmor' ?2                  	;0
723  239   DO_FCALL_BY_NAME/131      ?420      ?0                   ?0                  	;0
724  240   GOTO/253                  ?0        ?1073                ?641                	;0
725  242   BEGIN_SILENCE/57          #459=     ?0                   ?0                  	;0
726  242   INIT_FCALL_BY_NAME/59     ?0        ?0                   642:'ssh2_auth_password'	;3
727  242   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
728  242   SEND_VAR_EX/66            ?96       16?15                ?2                  	;0
729  242   SEND_VAR_EX/66            ?112      16?22                ?3                  	;0
730  242   DO_FCALL_BY_NAME/131      $460=     ?0                   ?0                  	;0
731  242   END_SILENCE/58            ?0        #459                 ?0                  	;0
732  242   ASSIGN/38                 ?423      16?31                $460                	;0
733  243   JMPZ/43                   ?0        16?31                ?735                	;0	>>735
734  244   GOTO/253                  ?0        ?530                 ?644                	;0
735  246   INIT_METHOD_CALL/112      ?0        16?32                645:'query'         	;2	<<733
736  246   SEND_VAL_EX/116           ?80       647:'UPDATE `servers` SET `status` = 4 WHERE `id` = ?;' ?1                  	;0
737  246   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
738  246   DO_FCALL/60               ?424      ?0                   ?0                  	;0
739  247   ECHO/40                   ?0        648:'Failed to authenticate using credentials. Exiting
' ?0                  	;0
740  248   EXIT/79                   ?0        ?0                   ?0                  	;0
741  249   GOTO/253                  ?0        ?529                 ?649                	;0
742  251   INIT_METHOD_CALL/112      ?0        16?32                650:'query'         	;2
743  251   SEND_VAL_EX/116           ?80       652:'UPDATE `servers` SET `status` = 4 WHERE `id` = ?;' ?1                  	;0
744  251   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
745  251   DO_FCALL/60               ?425      ?0                   ?0                  	;0
746  252   ECHO/40                   ?0        653:'Invalid type specified!
' ?0                  	;0
747  253   EXIT/79                   ?0        ?0                   ?0                  	;0
748  254   GOTO/253                  ?0        ?1184                ?654                	;0
749  256   GOTO/253                  ?0        ?1180                ?655                	;0
750  259   INIT_FCALL_BY_NAME/59     ?0        ?0                   656:'in_array'      	;2
751  259   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
752  259   SEND_VAL_EX/116           ?96       658:array (
  0 => 1,
  1 => 2,
) ?2                  	;0
753  259   DO_FCALL_BY_NAME/131      $464=     ?0                   ?0                  	;0
754  259   JMPZ/43                   ?0        $464                 ?756                	;0	>>756
755  260   GOTO/253                  ?0        ?761                 ?659                	;0
756  262   INIT_METHOD_CALL/112      ?0        16?32                660:'query'         	;2	<<754
757  262   SEND_VAL_EX/116           ?80       662:'UPDATE `servers` SET `status` = 1 WHERE `id` = ?;' ?1                  	;0
758  262   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
759  262   DO_FCALL/60               ?427      ?0                   ?0                  	;0
760  263   GOTO/253                  ?0        ?827                 ?663                	;0
761  265   GOTO/253                  ?0        ?820                 ?664                	;0
762  267   INIT_FCALL_BY_NAME/59     ?0        ?0                   665:'posix_getpwuid'	;1	<<0
763  267   INIT_FCALL_BY_NAME/59     ?0        ?0                   667:'posix_geteuid' 	;0
764  267   DO_FCALL_BY_NAME/131      $466=     ?0                   ?0                  	;0
765  267   SEND_VAR_NO_REF_EX/50     ?80       $466                 ?1                  	;0
766  267   DO_FCALL_BY_NAME/131      $467=     ?0                   ?0                  	;0
767  267   FETCH_DIM_R/81            $468=     $467                 669:'name'          	;0
768  267   IS_NOT_EQUAL/18           #469=     $468                 670:'xui'           	;0
769  267   BOOL_NOT/13               #470=     #469                 ?0                  	;0
770  267   JMPZ/43                   ?0        #470                 ?772                	;0	>>772
771  268   GOTO/253                  ?0        ?773                 ?671                	;0
772  270   EXIT/79                   ?0        672:'Please run as XUI!
' ?0                  	;0	<<770
773  272   BEGIN_SILENCE/57          #471=     ?0                   ?0                  	;0
774  272   FETCH_R/80                $472=     673:'argc'           ?0                  	;268435456
775  272   END_SILENCE/58            ?0        #471                 ?0                  	;0
776  272   BOOL_NOT/13               #473=     $472                 ?0                  	;0
777  272   JMPNZ_EX/47               #473=     #473                 ?780                	;0	>>780
778  272   IS_SMALLER/19             #474=     16?33                674:6               	;0
779  272   BOOL/52                   #473=     #474                 ?0                  	;0
780  272   BOOL_NOT/13               #475=     #473                 ?0                  	;0	<<777
781  272   JMPZ/43                   ?0        #475                 ?783                	;0	>>783
782  273   GOTO/253                  ?0        ?1040                ?675                	;0
783  275   EXIT/79                   ?0        676:0                ?0                  	;0	<<781
784  276   GOTO/253                  ?0        ?1040                ?677                	;0
785  278   FETCH_CONSTANT/99         #477=     ?0                   681:'SERVER_ID'     	;16
786  278   FETCH_STATIC_PROP_R/173   $476=     678:'rServers'       679:'XUI'           	;0
787  278   FETCH_DIM_R/81            $478=     $476                 #477                	;0
788  278   FETCH_DIM_R/81            $479=     $478                 684:'private_ip'    	;0
789  278   CONCAT/8                  #480=     685:'; XUI Configuration
; -----------------

[XUI]
hostname    =   "' $479                	;0
790  278   CONCAT/8                  #481=     #480                 686:'"
port        =   '	;0
791  278   INIT_FCALL_BY_NAME/59     ?0        ?0                   687:'intval'        	;1
792  278   FETCH_CONSTANT/99         #483=     ?0                   692:'SERVER_ID'     	;16
793  278   FETCH_STATIC_PROP_FUNC_ARG/177 $482=     689:'rServers'       690:'XUI'           	;1
794  278   FETCH_DIM_FUNC_ARG/93     $484=     $482                 #483                	;1
795  278   FETCH_DIM_FUNC_ARG/93     $485=     $484                 695:'http_broadcast_port'	;1
796  278   SEND_VAR_EX/66            ?80       $485                 ?1                  	;0
797  278   DO_FCALL_BY_NAME/131      $486=     ?0                   ?0                  	;0
798  278   CONCAT/8                  #487=     #481                 $486                	;0
799  278   CONCAT/8                  #488=     #487                 696:'
server_id   =   '	;0
800  278   CONCAT/8                  #489=     #488                 16?13               	;0
801  278   ASSIGN/38                 ?452      16?14                #489                	;0
802  281   INIT_FCALL_BY_NAME/59     ?0        ?0                   697:'file_put_contents'	;2
803  281   FETCH_CONSTANT/99         #491=     ?0                   699:'TMP_PATH'      	;16
804  281   CONCAT/8                  #492=     #491                 702:'config_'       	;0
805  281   CONCAT/8                  #493=     #492                 16?13               	;0
806  281   SEND_VAL_EX/116           ?80       #493                 ?1                  	;0
807  281   SEND_VAR_EX/66            ?96       16?14                ?2                  	;0
808  281   DO_FCALL_BY_NAME/131      ?456      ?0                   ?0                  	;0
809  282   INIT_FCALL_BY_NAME/59     ?0        ?0                   703:'sendFile'      	;3
810  282   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
811  282   FETCH_CONSTANT/99         #495=     ?0                   705:'TMP_PATH'      	;16
812  282   CONCAT/8                  #496=     #495                 708:'config_'       	;0
813  282   CONCAT/8                  #497=     #496                 16?13               	;0
814  282   SEND_VAL_EX/116           ?96       #497                 ?2                  	;0
815  282   FETCH_CONSTANT/99         #498=     ?0                   709:'CONFIG_PATH'   	;16
816  282   CONCAT/8                  #499=     #498                 712:'config.ini'    	;0
817  282   SEND_VAL_EX/116           ?112      #499                 ?3                  	;0
818  282   DO_FCALL_BY_NAME/131      ?462      ?0                   ?0                  	;0
819  283   GOTO/253                  ?0        ?582                 ?713                	;0
820  285   INIT_METHOD_CALL/112      ?0        16?32                714:'query'         	;5
821  285   SEND_VAL_EX/116           ?80       716:'UPDATE `servers` SET `status` = 1, `http_broadcast_port` = ?, `https_broadcast_port` = ?, `total_services` = ? WHERE `id` = ?;' ?1                  	;0
822  285   SEND_VAR_EX/66            ?96       16?23                ?2                  	;0
823  285   SEND_VAR_EX/66            ?112      16?0                 ?3                  	;0
824  285   SEND_VAR_EX/66            ?128      16?6                 ?4                  	;0
825  285   SEND_VAR_EX/66            ?144      16?13                ?5                  	;0
826  285   DO_FCALL/60               ?463      ?0                   ?0                  	;0
827  287   INIT_FCALL_BY_NAME/59     ?0        ?0                   717:'unlink'        	;1
828  287   CONCAT/8                  #502=     16?25                16?13               	;0
829  287   CONCAT/8                  #503=     #502                 719:'.json'         	;0
830  287   SEND_VAL_EX/116           ?80       #503                 ?1                  	;0
831  287   DO_FCALL_BY_NAME/131      ?466      ?0                   ?0                  	;0
832  290   GOTO/253                  ?0        ?1291                ?720                	;0
833  292   INIT_FCALL_BY_NAME/59     ?0        ?0                   721:'e04601c350EfBe4b'	;2
834  292   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
835  292   SEND_VAL_EX/116           ?96       723:'sudo sysctl -p' ?2                  	;0
836  292   DO_FCALL_BY_NAME/131      ?467      ?0                   ?0                  	;0
837  293   INIT_FCALL_BY_NAME/59     ?0        ?0                   724:'e04601c350EfBe4b'	;2
838  293   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
839  293   FETCH_CONSTANT/99         #506=     ?0                   726:'CONFIG_PATH'   	;16
840  293   CONCAT/8                  #507=     729:'sudo touch '    #506                	;0
841  293   CONCAT/8                  #508=     #507                 730:'sysctl.on'     	;0
842  293   SEND_VAL_EX/116           ?96       #508                 ?2                  	;0
843  293   DO_FCALL_BY_NAME/131      ?471      ?0                   ?0                  	;0
844  297   GOTO/253                  ?0        ?676                 ?731                	;0
845  299   FE_RESET_R/77             $510=     16?28                ?926                	;0
846  299   FE_FETCH_R/78             ?0        $510                 16?34               	;926	>>926	<<925
847  300   NOP/0                     ?0        ?0                   ?0                  	;1
848  300   GOTO/253                  ?0        ?875                 ?732                	;0
849  302   INIT_FCALL_BY_NAME/59     ?0        ?0                   733:'E04601c350EfBe4b'	;2
850  302   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
851  302   CONCAT/8                  #511=     735:'sudo tar -zxvf "/tmp/' 16?34               	;0
852  302   CONCAT/8                  #512=     #511                 736:'" -C "'        	;0
853  302   FETCH_CONSTANT/99         #513=     ?0                   737:'XUI_HOME'      	;16
854  302   CONCAT/8                  #514=     #512                 #513                	;0
855  302   CONCAT/8                  #515=     #514                 740:'"'             	;0
856  302   SEND_VAL_EX/116           ?96       #515                 ?2                  	;0
857  302   DO_FCALL_BY_NAME/131      $516=     ?0                   ?0                  	;0
858  302   ASSIGN/38                 ?479      16?35                $516                	;0
859  303   INIT_FCALL_BY_NAME/59     ?0        ?0                   741:'file_exists'   	;1
860  303   FETCH_CONSTANT/99         #518=     ?0                   743:'XUI_HOME'      	;16
861  303   CONCAT/8                  #519=     #518                 746:'status'        	;0
862  303   SEND_VAL_EX/116           ?80       #519                 ?1                  	;0
863  303   DO_FCALL_BY_NAME/131      $520=     ?0                   ?0                  	;0
864  303   JMPZ/43                   ?0        $520                 ?867                	;0	>>867
865  304   NOP/0                     ?0        ?0                   ?0                  	;1
866  304   GOTO/253                  ?0        ?917                 ?747                	;0
867  306   INIT_METHOD_CALL/112      ?0        16?32                748:'query'         	;2	<<864
868  306   SEND_VAL_EX/116           ?80       750:'UPDATE `servers` SET `status` = 4 WHERE `id` = ?;' ?1                  	;0
869  306   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
870  306   DO_FCALL/60               ?483      ?0                   ?0                  	;0
871  307   ECHO/40                   ?0        751:'Failed to extract files! Exiting
' ?0                  	;0
872  308   EXIT/79                   ?0        ?0                   ?0                  	;0
873  309   NOP/0                     ?0        ?0                   ?0                  	;1
874  309   GOTO/253                  ?0        ?917                 ?752                	;0
875  311   POST_INC/36               #522=     16?7                 ?0                  	;0
876  311   FREE/70                   ?0        #522                 ?0                  	;0
877  312   CONCAT/8                  #523=     753:'Transferring compressed system files (' 16?7                	;0
878  312   CONCAT/8                  #524=     #523                 754:' of '          	;0
879  312   INIT_FCALL_BY_NAME/59     ?0        ?0                   755:'count'         	;1
880  312   SEND_VAR_EX/66            ?80       16?28                ?1                  	;0
881  312   DO_FCALL_BY_NAME/131      $525=     ?0                   ?0                  	;0
882  312   CONCAT/8                  #526=     #524                 $525                	;0
883  312   CONCAT/8                  #527=     #526                 757:')
'            	;0
884  312   ECHO/40                   ?0        #527                 ?0                  	;0
885  313   INIT_FCALL_BY_NAME/59     ?0        ?0                   758:'sendFile'      	;4
886  313   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
887  313   CONCAT/8                  #528=     16?25                16?34               	;0
888  313   SEND_VAL_EX/116           ?96       #528                 ?2                  	;0
889  313   CONCAT/8                  #529=     760:'/tmp/'          16?34               	;0
890  313   SEND_VAL_EX/116           ?112      #529                 ?3                  	;0
891  313   SEND_VAL_EX/116           ?128      761:true             ?4                  	;0
892  313   DO_FCALL_BY_NAME/131      $530=     ?0                   ?0                  	;0
893  313   JMPZ/43                   ?0        $530                 ?896                	;0	>>896
894  314   NOP/0                     ?0        ?0                   ?0                  	;1
895  314   GOTO/253                  ?0        ?906                 ?762                	;0
896  316   INIT_METHOD_CALL/112      ?0        16?32                763:'query'         	;2	<<893
897  316   SEND_VAL_EX/116           ?80       765:'UPDATE `servers` SET `status` = 4 WHERE `id` = ?;' ?1                  	;0
898  316   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
899  316   DO_FCALL/60               ?493      ?0                   ?0                  	;0
900  317   ECHO/40                   ?0        766:'Invalid MD5 checksum! Exiting
' ?0                  	;0
901  318   NOP/0                     ?0        ?0                   ?0                  	;1
902  318   GOTO/253                  ?0        ?903                 ?767                	;0
903  320   EXIT/79                   ?0        ?0                   ?0                  	;0
904  321   NOP/0                     ?0        ?0                   ?0                  	;1
905  321   GOTO/253                  ?0        ?917                 ?768                	;0
906  323   ECHO/40                   ?0        769:'Extracting to directory
' ?0                  	;0
907  324   INIT_FCALL_BY_NAME/59     ?0        ?0                   770:'e04601c350eFbE4b'	;2
908  324   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
909  324   FETCH_CONSTANT/99         #532=     ?0                   772:'XUI_HOME'      	;16
910  324   CONCAT/8                  #533=     775:'sudo rm -rf '   #532                	;0
911  324   CONCAT/8                  #534=     #533                 776:'status'        	;0
912  324   SEND_VAL_EX/116           ?96       #534                 ?2                  	;0
913  324   DO_FCALL_BY_NAME/131      $535=     ?0                   ?0                  	;0
914  324   ASSIGN/38                 ?498      16?35                $535                	;0
915  325   NOP/0                     ?0        ?0                   ?0                  	;1
916  325   GOTO/253                  ?0        ?849                 ?777                	;0
917  329   INIT_FCALL_BY_NAME/59     ?0        ?0                   778:'e04601C350EFBe4B'	;2
918  329   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
919  329   CONCAT/8                  #537=     780:'sudo rm -f "/tmp/' 16?34               	;0
920  329   CONCAT/8                  #538=     #537                 781:'.tar.gz"'      	;0
921  329   SEND_VAL_EX/116           ?96       #538                 ?2                  	;0
922  329   DO_FCALL_BY_NAME/131      ?501      ?0                   ?0                  	;0
923  331   NOP/0                     ?0        ?0                   ?0                  	;1
924  331   GOTO/253                  ?0        ?925                 ?782                	;0
925  332   JMP/42                    ?0        ?846                 ?0                  	;0	>>846
926  332   FE_FREE/127               ?0        $510                 ?0                  	;0	<<845
927  335   INIT_FCALL_BY_NAME/59     ?0        ?0                   783:'in_array'      	;2
928  335   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
929  335   SEND_VAL_EX/116           ?96       785:array (
  0 => 2,
  1 => 3,
) ?2                  	;0
930  335   DO_FCALL_BY_NAME/131      $540=     ?0                   ?0                  	;0
931  335   BOOL_NOT/13               #541=     $540                 ?0                  	;0
932  335   JMPZ/43                   ?0        #541                 ?934                	;0	>>934
933  336   GOTO/253                  ?0        ?844                 ?786                	;0
934  338   INIT_FCALL_BY_NAME/59     ?0        ?0                   787:'stripos'       	;2	<<932
935  338   INIT_FCALL_BY_NAME/59     ?0        ?0                   789:'e04601C350EFBe4B'	;2
936  338   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
937  338   SEND_VAL_EX/116           ?96       791:'sudo cat /etc/fstab' ?2                  	;0
938  338   DO_FCALL_BY_NAME/131      $542=     ?0                   ?0                  	;0
939  338   SEPARATE/156              $542=     $542                 ?0                  	;0
940  338   FETCH_DIM_FUNC_ARG/93     $543=     $542                 792:'output'        	;1
941  338   SEND_VAR_EX/66            ?80       $543                 ?1                  	;0
942  338   FETCH_CONSTANT/99         #544=     ?0                   793:'STREAMS_PATH'  	;16
943  338   SEND_VAL_EX/116           ?96       #544                 ?2                  	;0
944  338   DO_FCALL_BY_NAME/131      $545=     ?0                   ?0                  	;0
945  338   IS_IDENTICAL/15           #546=     $545                 796:false           	;0
946  338   BOOL_NOT/13               #547=     #546                 ?0                  	;0
947  338   JMPZ/43                   ?0        #547                 ?949                	;0	>>949
948  339   GOTO/253                  ?0        ?343                 ?797                	;0
949  341   ECHO/40                   ?0        798:'Adding ramdisk mounts
' ?0                  	;0	<<947
950  342   GOTO/253                  ?0        ?329                 ?799                	;0
951  344   INIT_FCALL_BY_NAME/59     ?0        ?0                   800:'sendFile'      	;3
952  344   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
953  344   FETCH_CONSTANT/99         #548=     ?0                   802:'CONFIG_PATH'   	;16
954  344   CONCAT/8                  #549=     #548                 805:'credentials'   	;0
955  344   SEND_VAL_EX/116           ?96       #549                 ?2                  	;0
956  344   FETCH_CONSTANT/99         #550=     ?0                   806:'CONFIG_PATH'   	;16
957  344   CONCAT/8                  #551=     #550                 809:'credentials'   	;0
958  344   SEND_VAL_EX/116           ?112      #551                 ?3                  	;0
959  344   DO_FCALL_BY_NAME/131      ?514      ?0                   ?0                  	;0
960  345   INIT_FCALL_BY_NAME/59     ?0        ?0                   810:'sendFile'      	;3
961  345   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
962  345   FETCH_CONSTANT/99         #553=     ?0                   812:'XUI_HOME'      	;16
963  345   CONCAT/8                  #554=     #553                 815:'bin/nginx/conf/custom.conf'	;0
964  345   SEND_VAL_EX/116           ?96       #554                 ?2                  	;0
965  345   FETCH_CONSTANT/99         #555=     ?0                   816:'XUI_HOME'      	;16
966  345   CONCAT/8                  #556=     #555                 819:'bin/nginx/conf/custom.conf'	;0
967  345   SEND_VAL_EX/116           ?112      #556                 ?3                  	;0
968  345   DO_FCALL_BY_NAME/131      ?519      ?0                   ?0                  	;0
969  346   INIT_FCALL_BY_NAME/59     ?0        ?0                   820:'sendFile'      	;3
970  346   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
971  346   FETCH_CONSTANT/99         #558=     ?0                   822:'XUI_HOME'      	;16
972  346   CONCAT/8                  #559=     #558                 825:'bin/nginx/conf/realip_cdn.conf'	;0
973  346   SEND_VAL_EX/116           ?96       #559                 ?2                  	;0
974  346   FETCH_CONSTANT/99         #560=     ?0                   826:'XUI_HOME'      	;16
975  346   CONCAT/8                  #561=     #560                 829:'bin/nginx/conf/realip_cdn.conf'	;0
976  346   SEND_VAL_EX/116           ?112      #561                 ?3                  	;0
977  346   DO_FCALL_BY_NAME/131      ?524      ?0                   ?0                  	;0
978  347   INIT_FCALL_BY_NAME/59     ?0        ?0                   830:'sendFile'      	;3
979  347   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
980  347   FETCH_CONSTANT/99         #563=     ?0                   832:'XUI_HOME'      	;16
981  347   CONCAT/8                  #564=     #563                 835:'bin/nginx/conf/realip_cloudflare.conf'	;0
982  347   SEND_VAL_EX/116           ?96       #564                 ?2                  	;0
983  347   FETCH_CONSTANT/99         #565=     ?0                   836:'XUI_HOME'      	;16
984  347   CONCAT/8                  #566=     #565                 839:'bin/nginx/conf/realip_cloudflare.conf'	;0
985  347   SEND_VAL_EX/116           ?112      #566                 ?3                  	;0
986  347   DO_FCALL_BY_NAME/131      ?529      ?0                   ?0                  	;0
987  348   INIT_FCALL_BY_NAME/59     ?0        ?0                   840:'sendFile'      	;3
988  348   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
989  348   FETCH_CONSTANT/99         #568=     ?0                   842:'XUI_HOME'      	;16
990  348   CONCAT/8                  #569=     #568                 845:'bin/nginx/conf/realip_xui.conf'	;0
991  348   SEND_VAL_EX/116           ?96       #569                 ?2                  	;0
992  348   FETCH_CONSTANT/99         #570=     ?0                   846:'XUI_HOME'      	;16
993  348   CONCAT/8                  #571=     #570                 849:'bin/nginx/conf/realip_xui.conf'	;0
994  348   SEND_VAL_EX/116           ?112      #571                 ?3                  	;0
995  348   DO_FCALL_BY_NAME/131      ?534      ?0                   ?0                  	;0
996  349   GOTO/253                  ?0        ?500                 ?850                	;0
997  351   INIT_FCALL_BY_NAME/59     ?0        ?0                   851:'E04601C350eFbE4B'	;2
998  351   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
999  351   SEND_VAL_EX/116           ?96       853:'sudo chmod +x /etc/systemd/system/xuione.service' ?2                  	;0
1000 351   DO_FCALL_BY_NAME/131      ?535      ?0                   ?0                  	;0
1001 352   INIT_FCALL_BY_NAME/59     ?0        ?0                   854:'e04601c350EfBe4b'	;2
1002 352   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1003 352   SEND_VAL_EX/116           ?96       856:'sudo rm /etc/init.d/xuione' ?2                  	;0
1004 352   DO_FCALL_BY_NAME/131      ?536      ?0                   ?0                  	;0
1005 353   INIT_FCALL_BY_NAME/59     ?0        ?0                   857:'e04601c350EFbe4b'	;2
1006 353   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1007 353   SEND_VAL_EX/116           ?96       859:'sudo systemctl daemon-reload' ?2                  	;0
1008 353   DO_FCALL_BY_NAME/131      ?537      ?0                   ?0                  	;0
1009 354   INIT_FCALL_BY_NAME/59     ?0        ?0                   860:'E04601c350efBE4b'	;2
1010 354   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1011 354   SEND_VAL_EX/116           ?96       862:'sudo systemctl enable xuione' ?2                  	;0
1012 354   DO_FCALL_BY_NAME/131      ?538      ?0                   ?0                  	;0
1013 355   IS_EQUAL/17               #577=     16?20                863:1               	;0
1014 355   JMPZ/43                   ?0        #577                 ?1016               	;0	>>1016
1015 356   GOTO/253                  ?0        ?389                 ?864                	;0
1016 358   GOTO/253                  ?0        ?951                 ?865                	;0	<<1014
1017 360   INIT_FCALL_BY_NAME/59     ?0        ?0                   866:'e04601C350EFBe4B'	;2
1018 360   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1019 360   SEND_VAL_EX/116           ?96       868:'sudo cat "/etc/systemd/system.conf"' ?2                  	;0
1020 360   DO_FCALL_BY_NAME/131      $578=     ?0                   ?0                  	;0
1021 360   FETCH_DIM_R/81            $579=     $578                 869:'output'        	;0
1022 360   ASSIGN/38                 ?542      16?30                $579                	;0
1023 361   INIT_FCALL_BY_NAME/59     ?0        ?0                   870:'strpos'        	;2
1024 361   SEND_VAR_EX/66            ?80       16?30                ?1                  	;0
1025 361   SEND_VAL_EX/116           ?96       872:'DefaultLimitNOFILE=1048576' ?2                  	;0
1026 361   DO_FCALL_BY_NAME/131      $581=     ?0                   ?0                  	;0
1027 361   IS_IDENTICAL/15           #582=     $581                 873:false           	;0
1028 361   BOOL_NOT/13               #583=     #582                 ?0                  	;0
1029 361   JMPZ/43                   ?0        #583                 ?1031               	;0	>>1031
1030 362   GOTO/253                  ?0        ?1039                ?874                	;0
1031 364   INIT_FCALL_BY_NAME/59     ?0        ?0                   875:'E04601C350EfBe4B'	;2	<<1029
1032 364   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1033 364   SEND_VAL_EX/116           ?96       877:'sudo echo "
DefaultLimitNOFILE=1048576" >> "/etc/systemd/system.conf"' ?2                  	;0
1034 364   DO_FCALL_BY_NAME/131      ?546      ?0                   ?0                  	;0
1035 365   INIT_FCALL_BY_NAME/59     ?0        ?0                   878:'e04601C350EfBE4B'	;2
1036 365   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1037 365   SEND_VAL_EX/116           ?96       880:'sudo echo "
DefaultLimitNOFILE=1048576" >> "/etc/systemd/user.conf"' ?2                  	;0
1038 365   DO_FCALL_BY_NAME/131      ?547      ?0                   ?0                  	;0
1039 367   GOTO/253                  ?0        ?704                 ?881                	;0
1040 370   INIT_FCALL_BY_NAME/59     ?0        ?0                   882:'intval'        	;1
1041 370   FETCH_DIM_FUNC_ARG/93     $586=     16?1                 884:2               	;1
1042 370   SEND_VAR_EX/66            ?80       $586                 ?1                  	;0
1043 370   DO_FCALL_BY_NAME/131      $587=     ?0                   ?0                  	;0
1044 370   ASSIGN/38                 ?550      16?13                $587                	;0
1045 371   IS_EQUAL/17               #589=     16?13                885:0               	;0
1046 371   BOOL_NOT/13               #590=     #589                 ?0                  	;0
1047 371   JMPZ/43                   ?0        #590                 ?1049               	;0	>>1049
1048 372   GOTO/253                  ?0        ?1050                ?886                	;0
1049 374   EXIT/79                   ?0        ?0                   ?0                  	;0	<<1047
1050 376   GOTO/253                  ?0        ?1229                ?887                	;0
1051 379   FETCH_STATIC_PROP_R/173   $591=     888:'rServers'       889:'XUI'           	;0
1052 379   FETCH_DIM_R/81            $592=     $591                 16?13               	;0
1053 379   FETCH_DIM_R/81            $593=     $592                 891:'server_ip'     	;0
1054 379   ASSIGN/38                 ?556      16?36                $593                	;0
1055 380   ROPE_INIT/54              #596=     ?0                   892:'Connecting to '	;5
1056 380   ROPE_ADD/55               #596=     #596                 16?36               	;1
1057 380   ROPE_ADD/55               #596=     #596                 893:':'             	;2
1058 380   ROPE_ADD/55               #596=     #596                 16?21               	;3
1059 380   ROPE_END/56               #595=     #596                 894:'
'             	;4
1060 380   ECHO/40                   ?0        #595                 ?0                  	;0
1061 381   INIT_FCALL_BY_NAME/59     ?0        ?0                   895:'ssh2_connect'  	;2
1062 381   SEND_VAR_EX/66            ?80       16?36                ?1                  	;0
1063 381   SEND_VAR_EX/66            ?96       16?21                ?2                  	;0
1064 381   DO_FCALL_BY_NAME/131      $599=     ?0                   ?0                  	;0
1065 381   ASSIGN/38                 $600=     16?12                $599                	;0
1066 381   JMPZ/43                   ?0        $600                 ?1068               	;0	>>1068
1067 382   GOTO/253                  ?0        ?384                 ?897                	;0
1068 384   INIT_METHOD_CALL/112      ?0        16?32                898:'query'         	;2	<<1066
1069 384   SEND_VAL_EX/116           ?80       900:'UPDATE `servers` SET `status` = 4 WHERE `id` = ?;' ?1                  	;0
1070 384   SEND_VAR_EX/66            ?96       16?13                ?2                  	;0
1071 384   DO_FCALL/60               ?563      ?0                   ?0                  	;0
1072 385   GOTO/253                  ?0        ?381                 ?901                	;0
1073 387   INIT_FCALL_BY_NAME/59     ?0        ?0                   902:'E04601c350eFbe4b'	;2
1074 387   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1075 387   SEND_VAL_EX/116           ?96       904:'sudo systemctl disable apparmor' ?2                  	;0
1076 387   DO_FCALL_BY_NAME/131      ?564      ?0                   ?0                  	;0
1077 388   INIT_FCALL_BY_NAME/59     ?0        ?0                   905:'e04601C350efbe4b'	;2
1078 388   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1079 388   SEND_VAL_EX/116           ?96       907:'sudo mount -a'  ?2                  	;0
1080 388   DO_FCALL_BY_NAME/131      ?565      ?0                   ?0                  	;0
1081 389   INIT_FCALL_BY_NAME/59     ?0        ?0                   908:'E04601C350eFBe4B'	;2
1082 389   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1083 389   SEND_VAL_EX/116           ?96       910:'sudo echo \'net.ipv4.ip_unprivileged_port_start=0\' > /etc/sysctl.d/50-allports-nonroot.conf && sudo sysctl --system' ?2                  	;0
1084 389   DO_FCALL_BY_NAME/131      ?566      ?0                   ?0                  	;0
1085 390   INIT_FCALL_BY_NAME/59     ?0        ?0                   911:'sleep'         	;1
1086 390   SEND_VAL_EX/116           ?80       913:3                ?1                  	;0
1087 390   DO_FCALL_BY_NAME/131      ?567      ?0                   ?0                  	;0
1088 391   INIT_FCALL_BY_NAME/59     ?0        ?0                   914:'E04601c350eFbE4b'	;2
1089 391   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1090 391   FETCH_CONSTANT/99         #606=     ?0                   916:'XUI_HOME'      	;16
1091 391   CONCAT/8                  #607=     919:'sudo chown -R xui:xui ' #606                	;0
1092 391   CONCAT/8                  #608=     #607                 920:'tmp'           	;0
1093 391   SEND_VAL_EX/116           ?96       #608                 ?2                  	;0
1094 391   DO_FCALL_BY_NAME/131      ?571      ?0                   ?0                  	;0
1095 392   GOTO/253                  ?0        ?1157                ?921                	;0
1096 394   INIT_FCALL_BY_NAME/59     ?0        ?0                   922:'sendFile'      	;3
1097 394   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1098 394   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
1099 394   FETCH_CONSTANT/99         #610=     ?0                   924:'XUI_HOME'      	;16
1100 394   CONCAT/8                  #611=     #610                 927:'bin/daemons.sh'	;0
1101 394   SEND_VAL_EX/116           ?112      #611                 ?3                  	;0
1102 394   DO_FCALL_BY_NAME/131      ?574      ?0                   ?0                  	;0
1103 395   FETCH_CONSTANT/99         #613=     ?0                   928:'TMP_PATH'      	;16
1104 395   INIT_FCALL_BY_NAME/59     ?0        ?0                   931:'md5'           	;1
1105 395   INIT_FCALL_BY_NAME/59     ?0        ?0                   933:'time'          	;0
1106 395   DO_FCALL_BY_NAME/131      $614=     ?0                   ?0                  	;0
1107 395   CONCAT/8                  #615=     $614                 935:'balance.conf'  	;0
1108 395   SEND_VAL_EX/116           ?80       #615                 ?1                  	;0
1109 395   DO_FCALL_BY_NAME/131      $616=     ?0                   ?0                  	;0
1110 395   CONCAT/8                  #617=     #613                 $616                	;0
1111 395   ASSIGN/38                 ?580      16?10                #617                	;0
1112 396   INIT_FCALL_BY_NAME/59     ?0        ?0                   936:'file_put_contents'	;2
1113 396   SEND_VAR_EX/66            ?80       16?10                ?1                  	;0
1114 396   SEND_VAR_EX/66            ?96       16?9                 ?2                  	;0
1115 396   DO_FCALL_BY_NAME/131      ?581      ?0                   ?0                  	;0
1116 397   INIT_FCALL_BY_NAME/59     ?0        ?0                   938:'sendFile'      	;3
1117 397   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1118 397   SEND_VAR_EX/66            ?96       16?10                ?2                  	;0
1119 397   FETCH_CONSTANT/99         #620=     ?0                   940:'XUI_HOME'      	;16
1120 397   CONCAT/8                  #621=     #620                 943:'bin/nginx/conf/balance.conf'	;0
1121 397   SEND_VAL_EX/116           ?112      #621                 ?3                  	;0
1122 397   DO_FCALL_BY_NAME/131      ?584      ?0                   ?0                  	;0
1123 398   INIT_FCALL_BY_NAME/59     ?0        ?0                   944:'e04601C350efbE4B'	;2
1124 398   SEND_VAR_EX/66            ?80       16?12                ?1                  	;0
1125 398   FETCH_CONSTANT/99         #623=     ?0                   946:'XUI_HOME'      	;16
1126 398   CONCAT/8                  #624=     949:'sudo chmod +x ' #623                	;0
1127 398   CONCAT/8                  #625=     #624                 950:'bin/daemons.sh'	;0
1128 398   SEND_VAL_EX/116           ?96       #625                 ?2                  	;0
1129 398   DO_FCALL_BY_NAME/131      ?588      ?0                   ?0                  	;0
1130 399   GOTO/253                  ?0        ?388                 ?951                	;0
1131 401   ASSIGN/38                 ?589      16?27                952:array (
  0 => 'iproute2',
  1 => 'net-tools',
  2 => 'libcurl4',
  3 => 'libxslt1-dev',
  4 => 'libonig-dev',
  5 => 'e2fsprogs',
  6 => 'wget',
  7 => 'sysstat',
  8 => 'mcrypt',
  9 => 'python3',
  10 => 'certbot',
  11 => 'iptables-persistent',
  12 => 'libjpeg-dev',
  13 => 'libpng-dev',
  14 => 'php-ssh2',
  15 => 'xz-utils',
  16 => 'zip',
  17 => 'unzip',
)	;0
1132 402   FETCH_DIM_R/81            $628=     16?26                953:'proxy'         	;0
1133 402   INIT_ARRAY/71             #629=     $628                 ?0                  	;4
1134 402   ASSIGN/38                 ?592      16?28                #629                	;0
1135 405   NOP/0                     ?0        ?0                   ?0                  	;0
1136 446   NOP/0                     ?0        ?0                   ?0                  	;0
1137 454   GOTO/253                  ?0        ?1259                ?954                	;0
1138 457   INIT_FCALL/61             ?0        ?304                 955:'e04601c350efbe4b'	;2
1139 457   SEND_VAR/117              ?80       16?12                ?1                  	;0
1140 457   ROPE_INIT/54              #632=     ?0                   956:'sudo echo "listen '	;3
1141 457   ROPE_ADD/55               #632=     #632                 16?23               	;1
1142 457   ROPE_END/56               #631=     #632                 957:';" > "/home/xui/bin/nginx/conf/ports/http.conf"'	;2
1143 457   SEND_VAL/65               ?96       #631                 ?2                  	;0
1144 457   DO_FCALL/60               ?596      ?0                   ?0                  	;0
1145 458   INIT_FCALL/61             ?0        ?304                 958:'e04601c350efbe4b'	;2
1146 458   SEND_VAR/117              ?80       16?12                ?1                  	;0
1147 458   ROPE_INIT/54              #636=     ?0                   959:'sudo echo "listen '	;3
1148 458   ROPE_ADD/55               #636=     #636                 16?0                	;1
1149 458   ROPE_END/56               #635=     #636                 960:' ssl;" > "/home/xui/bin/nginx/conf/ports/https.conf"'	;2
1150 458   SEND_VAL/65               ?96       #635                 ?2                  	;0
1151 458   DO_FCALL/60               ?600      ?0                   ?0                  	;0
1152 459   INIT_FCALL/61             ?0        ?304                 961:'e04601c350efbe4b'	;2
1153 459   SEND_VAR/117              ?80       16?12                ?1                  	;0
1154 459   SEND_VAL/65               ?96       962:'sudo chmod 0777 /home/xui/bin' ?2                  	;0
1155 459   DO_FCALL/60               ?601      ?0                   ?0                  	;0
1156 461   GOTO/253                  ?0        ?1017                ?963                	;0
1157 463   INIT_FCALL/61             ?0        ?304                 964:'e04601c350efbe4b'	;2
1158 463   SEND_VAR/117              ?80       16?12                ?1                  	;0
1159 463   FETCH_CONSTANT/99         #640=     ?0                   965:'XUI_HOME'      	;16
1160 463   CONCAT/8                  #641=     968:'sudo chown -R xui:xui ' #640                	;0
1161 463   CONCAT/8                  #642=     #641                 969:'content/streams'	;0
1162 463   SEND_VAL/65               ?96       #642                 ?2                  	;0
1163 463   DO_FCALL/60               ?605      ?0                   ?0                  	;0
1164 464   INIT_FCALL/61             ?0        ?304                 970:'e04601c350efbe4b'	;2
1165 464   SEND_VAR/117              ?80       16?12                ?1                  	;0
1166 464   FETCH_CONSTANT/99         #644=     ?0                   971:'XUI_HOME'      	;16
1167 464   CONCAT/8                  #645=     974:'sudo chown -R xui:xui ' #644                	;0
1168 464   SEND_VAL/65               ?96       #645                 ?2                  	;0
1169 464   DO_FCALL/60               ?608      ?0                   ?0                  	;0
1170 465   INIT_STATIC_METHOD_CALL/113 ?0        975:'Xui\\Functions' 977:'grantPrivileges'	;2
1171 465   SEND_VAL_EX/116           ?80       979:'TKbxeQrBXw2swDNwTh5yrj4jMV4RaLO0' ?1                  	;0
1172 465   SEND_VAR_EX/66            ?96       16?36                ?2                  	;0
1173 465   DO_FCALL/60               ?609      ?0                   ?0                  	;0
1174 466   ECHO/40                   ?0        980:'Installation complete! Starting XUI
' ?0                  	;0
1175 467   INIT_FCALL/61             ?0        ?304                 981:'e04601c350efbe4b'	;2
1176 467   SEND_VAR/117              ?80       16?12                ?1                  	;0
1177 467   SEND_VAL/65               ?96       982:'sudo service xuione restart' ?2                  	;0
1178 467   DO_FCALL/60               ?610      ?0                   ?0                  	;0
1179 468   GOTO/253                  ?0        ?482                 ?983                	;0
1180 470   ASSIGN/38                 ?611      16?27                984:array (
  0 => 'cpufrequtils',
)	;0
1181 471   FETCH_DIM_R/81            $650=     16?26                985:'lb_update'     	;0
1182 471   INIT_ARRAY/71             #651=     $650                 ?0                  	;4
1183 471   ASSIGN/38                 ?614      16?28                #651                	;0
1184 473   GOTO/253                  ?0        ?674                 ?986                	;0
1185 475   GOTO/253                  ?0        ?670                 ?987                	;0
1186 477   INIT_FCALL/61             ?0        ?304                 988:'e04601c350efbe4b'	;2
1187 477   SEND_VAR/117              ?80       16?12                ?1                  	;0
1188 477   SEND_VAL/65               ?96       989:'sudo apt-get update' ?2                  	;0
1189 477   DO_FCALL/60               ?615      ?0                   ?0                  	;0
1190 478   FE_RESET_R/77             $654=     16?27                ?1203               	;0
1191 478   FE_FETCH_R/78             ?0        $654                 16?37               	;1203	>>1203	<<1202
1192 479   ROPE_INIT/54              #656=     ?0                   990:'Installing package: '	;3
1193 479   ROPE_ADD/55               #656=     #656                 16?37               	;1
1194 479   ROPE_END/56               #655=     #656                 991:'
'             	;2
1195 479   ECHO/40                   ?0        #655                 ?0                  	;0
1196 480   INIT_FCALL/61             ?0        ?304                 992:'e04601c350efbe4b'	;2
1197 480   SEND_VAR/117              ?80       16?12                ?1                  	;0
1198 480   NOP/0                     ?0        ?0                   ?0                  	;0
1199 480   FAST_CONCAT/53            #658=     993:'sudo DEBIAN_FRONTEND=noninteractive apt-get -yq install ' 16?37               	;0
1200 480   SEND_VAL/65               ?96       #658                 ?2                  	;0
1201 480   DO_FCALL/60               ?621      ?0                   ?0                  	;0
1202 481   JMP/42                    ?0        ?1191                ?0                  	;0	>>1191
1203 481   FE_FREE/127               ?0        $654                 ?0                  	;0	<<1190
1204 484   INIT_FCALL_BY_NAME/59     ?0        ?0                   994:'in_array'      	;2
1205 484   SEND_VAR_EX/66            ?80       16?20                ?1                  	;0
1206 484   SEND_VAL_EX/116           ?96       996:array (
  0 => 1,
  1 => 2,
) ?2                  	;0
1207 484   DO_FCALL_BY_NAME/131      $660=     ?0                   ?0                  	;0
1208 484   BOOL_NOT/13               #661=     $660                 ?0                  	;0
1209 484   JMPZ/43                   ?0        #661                 ?1211               	;0	>>1211
1210 485   GOTO/253                  ?0        ?580                 ?997                	;0
1211 487   ECHO/40                   ?0        998:'Creating XUI system user
' ?0                  	;0	<<1209
1212 488   GOTO/253                  ?0        ?564                 ?999                	;0
1213 490   INIT_FCALL/61             ?0        ?304                 1000:'e04601c350efbe4b'	;2
1214 490   SEND_VAR/117              ?80       16?12                ?1                  	;0
1215 490   FETCH_CONSTANT/99         #662=     ?0                   1001:'CONFIG_PATH'  	;16
1216 490   CONCAT/8                  #663=     1004:'sudo touch '   #662                	;0
1217 490   CONCAT/8                  #664=     #663                 1005:'sysctl.on'    	;0
1218 490   SEND_VAL/65               ?96       #664                 ?2                  	;0
1219 490   DO_FCALL/60               ?627      ?0                   ?0                  	;0
1220 491   GOTO/253                  ?0        ?1228                ?1006               	;0
1221 493   INIT_FCALL/61             ?0        ?304                 1007:'e04601c350efbe4b'	;2
1222 493   SEND_VAR/117              ?80       16?12                ?1                  	;0
1223 493   FETCH_CONSTANT/99         #666=     ?0                   1008:'CONFIG_PATH'  	;16
1224 493   CONCAT/8                  #667=     1011:'sudo rm '      #666                	;0
1225 493   CONCAT/8                  #668=     #667                 1012:'sysctl.on'    	;0
1226 493   SEND_VAL/65               ?96       #668                 ?2                  	;0
1227 493   DO_FCALL/60               ?631      ?0                   ?0                  	;0
1228 495   GOTO/253                  ?0        ?658                 ?1013               	;0
1229 497   INIT_FCALL_BY_NAME/59     ?0        ?0                   1014:'shell_exec'   	;1
1230 497   ROPE_INIT/54              #671=     ?0                   1016:'kill -9 `ps -ef | grep \'XUI Install\\['	;3
1231 497   ROPE_ADD/55               #671=     #671                 16?13               	;1
1232 497   ROPE_END/56               #670=     #671                 1017:'\\]\' | grep -v grep | awk \'{print $2}\'`;'	;2
1233 497   SEND_VAL_EX/116           ?80       #670                 ?1                  	;0
1234 497   DO_FCALL_BY_NAME/131      ?635      ?0                   ?0                  	;0
1235 498   INIT_FCALL_BY_NAME/59     ?0        ?0                   1018:'set_time_limit'	;1
1236 498   SEND_VAL_EX/116           ?80       1020:0               ?1                  	;0
1237 498   DO_FCALL_BY_NAME/131      ?636      ?0                   ?0                  	;0
1238 499   INIT_FCALL_BY_NAME/59     ?0        ?0                   1021:'cli_set_process_title'	;1
1239 499   ROPE_INIT/54              #676=     ?0                   1023:'XUI Install[' 	;3
1240 499   ROPE_ADD/55               #676=     #676                 16?13               	;1
1241 499   ROPE_END/56               #675=     #676                 1024:']'            	;2
1242 499   SEND_VAL_EX/116           ?80       #675                 ?1                  	;0
1243 499   DO_FCALL_BY_NAME/131      ?640      ?0                   ?0                  	;0
1244 500   INIT_FCALL_BY_NAME/59     ?0        ?0                   1025:'register_shutdown_function'	;1
1245 500   SEND_VAL_EX/116           ?80       1027:'shutdown'      ?1                  	;0
1246 500   DO_FCALL_BY_NAME/131      ?641      ?0                   ?0                  	;0
1247 501   INIT_FCALL_BY_NAME/59     ?0        ?0                   1028:'str_replace'  	;3
1248 501   SEND_VAL_EX/116           ?80       1030:'\\'            ?1                  	;0
1249 501   SEND_VAL_EX/116           ?96       1031:'/'             ?2                  	;0
1250 501   INIT_FCALL_BY_NAME/59     ?0        ?0                   1032:'dirname'      	;1
1251 501   FETCH_DIM_FUNC_ARG/93     $680=     16?1                 1034:0              	;1
1252 501   SEND_VAR_EX/66            ?80       $680                 ?1                  	;0
1253 501   DO_FCALL_BY_NAME/131      $681=     ?0                   ?0                  	;0
1254 501   SEND_VAR_NO_REF_EX/50     ?112      $681                 ?3                  	;0
1255 501   DO_FCALL_BY_NAME/131      $682=     ?0                   ?0                  	;0
1256 501   CONCAT/8                  #683=     $682                 1035:'/../../www/init.php'	;0
1257 501   INCLUDE_OR_EVAL/73        ?646      #683                 ?0                  	;8
1258 502   GOTO/253                  ?0        ?604                 ?1036               	;0
1259 504   IS_EQUAL/17               #685=     16?20                1037:1              	;0
1260 504   JMPZ/43                   ?0        #685                 ?1262               	;0	>>1262
1261 505   GOTO/253                  ?0        ?1275                ?1038               	;0
1262 507   INIT_FCALL_BY_NAME/59     ?0        ?0                   1039:'file_put_contents'	;2	<<1260
1263 507   CONCAT/8                  #686=     16?25                16?13               	;0
1264 507   CONCAT/8                  #687=     #686                 1041:'.json'        	;0
1265 507   SEND_VAL_EX/116           ?80       #687                 ?1                  	;0
1266 507   INIT_FCALL_BY_NAME/59     ?0        ?0                   1042:'json_encode'  	;1
1267 507   INIT_ARRAY/71             #688=     16?15                1044:'root_username'	;14
1268 507   ADD_ARRAY_ELEMENT/72      #688=     16?22                1045:'root_password'	;0
1269 507   ADD_ARRAY_ELEMENT/72      #688=     16?21                1046:'ssh_port'     	;0
1270 507   SEND_VAL_EX/116           ?80       #688                 ?1                  	;0
1271 507   DO_FCALL_BY_NAME/131      $689=     ?0                   ?0                  	;0
1272 507   SEND_VAR_NO_REF_EX/50     ?96       $689                 ?2                  	;0
1273 507   DO_FCALL_BY_NAME/131      ?652      ?0                   ?0                  	;0
1274 508   GOTO/253                  ?0        ?1051                ?1047               	;0
1275 510   INIT_FCALL_BY_NAME/59     ?0        ?0                   1048:'file_put_contents'	;2
1276 510   CONCAT/8                  #691=     16?25                16?13               	;0
1277 510   CONCAT/8                  #692=     #691                 1050:'.json'        	;0
1278 510   SEND_VAL_EX/116           ?80       #692                 ?1                  	;0
1279 510   INIT_FCALL_BY_NAME/59     ?0        ?0                   1051:'json_encode'  	;1
1280 510   INIT_ARRAY/71             #693=     16?15                1053:'root_username'	;26
1281 510   ADD_ARRAY_ELEMENT/72      #693=     16?22                1054:'root_password'	;0
1282 510   ADD_ARRAY_ELEMENT/72      #693=     16?21                1055:'ssh_port'     	;0
1283 510   ADD_ARRAY_ELEMENT/72      #693=     16?23                1056:'http_broadcast_port'	;0
1284 510   ADD_ARRAY_ELEMENT/72      #693=     16?0                 1057:'https_broadcast_port'	;0
1285 510   ADD_ARRAY_ELEMENT/72      #693=     16?4                 1058:'parent_id'    	;0
1286 510   SEND_VAL_EX/116           ?80       #693                 ?1                  	;0
1287 510   DO_FCALL_BY_NAME/131      $694=     ?0                   ?0                  	;0
1288 510   SEND_VAR_NO_REF_EX/50     ?96       $694                 ?2                  	;0
1289 510   DO_FCALL_BY_NAME/131      ?657      ?0                   ?0                  	;0
1290 511   GOTO/253                  ?0        ?1051                ?1059               	;0
1291 513   NOP/0                     ?0        ?0                   ?0                  	;0
1292 522   NOP/0                     ?0        1060:1               ?0                  	;4294967295
*/

?>