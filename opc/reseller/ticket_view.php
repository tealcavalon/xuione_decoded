<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?79                  ?0                  	;0	>>79
1   6    ECHO/40                   ?0        1:'				</div>
			</div>
		</div>
	</div>
</div>
' ?0                  	;0
2   7    GOTO/253                  ?0        ?111                 ?2                  	;0
3   9    INCLUDE_OR_EVAL/73        ?0        3:'topbar.php'       ?0                  	;2
4   10   ECHO/40                   ?0        4:'					</div>
					<h4 class="page-title">' ?0                  	;0
5   11   FETCH_DIM_R/81            $6=       16?0                 5:'title'           	;0
6   11   ECHO/40                   ?0        $6                   ?0                  	;0
7   12   ECHO/40                   ?0        6:'</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-12">
				<div class="timeline" dir="ltr">
					' ?0                  	;0
8   13   FETCH_DIM_R/81            $7=       16?0                 7:'replies'         	;0
9   13   FE_RESET_R/77             $8=       $7                   ?51                 	;0
10  13   FE_FETCH_R/78             ?0        $8                   16?1                	;51	>>51	<<50
11  14   NOP/0                     ?0        ?0                   ?0                  	;1
12  14   GOTO/253                  ?0        ?16                  ?8                  	;0
13  16   ECHO/40                   ?0        9:'</p>
							</div>
						</div>
					</article>
					' ?0                  	;0
14  18   NOP/0                     ?0        ?0                   ?0                  	;1
15  18   GOTO/253                  ?0        ?50                  ?10                 	;0
16  20   ECHO/40                   ?0        11:'					<article class="timeline-item' ?0                  	;0
17  21   FETCH_DIM_R/81            $9=       16?1                 12:'admin_reply'    	;0
18  21   JMPZ/43                   ?0        $9                   ?21                 	;0	>>21
19  22   NOP/0                     ?0        ?0                   ?0                  	;1
20  22   GOTO/253                  ?0        ?22                  ?13                 	;0
21  24   ECHO/40                   ?0        14:' timeline-item-left' ?0                  	;0	<<18
22  26   ECHO/40                   ?0        15:'">
						<div class="timeline-desk">
							<div class="timeline-box">
								<span class="arrow-alt"></span>
								<span class="timeline-icon"><i class="mdi mdi-adjust"></i></span>
								<h4 class="mt-0 font-16">' ?0                  	;0
23  27   NOP/0                     ?0        ?0                   ?0                  	;1
24  27   GOTO/253                  ?0        ?25                  ?16                 	;0
25  29   FETCH_DIM_R/81            $10=      16?1                 17:'admin_reply'    	;0
26  29   BOOL_NOT/13               #11=      $10                  ?0                  	;0
27  29   JMPZ/43                   ?0        #11                  ?30                 	;0	>>30
28  30   NOP/0                     ?0        ?0                   ?0                  	;1
29  30   GOTO/253                  ?0        ?33                  ?18                 	;0
30  32   ECHO/40                   ?0        19:'Owner'           ?0                  	;0	<<27
31  33   NOP/0                     ?0        ?0                   ?0                  	;1
32  33   GOTO/253                  ?0        ?38                  ?20                 	;0
33  35   FETCH_DIM_R/81            $12=      16?0                 21:'user'           	;0
34  35   FETCH_DIM_R/81            $13=      $12                  22:'username'       	;0
35  35   ECHO/40                   ?0        $13                  ?0                  	;0
36  36   NOP/0                     ?0        ?0                   ?0                  	;1
37  36   GOTO/253                  ?0        ?38                  ?23                 	;0
38  39   ECHO/40                   ?0        24:'</h4>
								<p class="text-muted"><small>' ?0                  	;0
39  40   INIT_FCALL_BY_NAME/59     ?0        ?0                   25:'date'           	;2
40  40   SEND_VAL_EX/116           ?80       27:'Y-m-d H:i'       ?1                  	;0
41  40   FETCH_DIM_FUNC_ARG/93     $14=      16?1                 28:'date'           	;2
42  40   SEND_VAR_EX/66            ?96       $14                  ?2                  	;0
43  40   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
44  40   ECHO/40                   ?0        $15                  ?0                  	;0
45  41   ECHO/40                   ?0        29:'</small></p>
								<p class="mb-0">' ?0                  	;0
46  42   FETCH_DIM_R/81            $16=      16?1                 30:'message'        	;0
47  42   ECHO/40                   ?0        $16                  ?0                  	;0
48  43   NOP/0                     ?0        ?0                   ?0                  	;1
49  43   GOTO/253                  ?0        ?13                  ?31                 	;0
50  44   JMP/42                    ?0        ?10                  ?0                  	;0	>>10
51  44   FE_FREE/127               ?0        $8                   ?0                  	;0	<<9
52  46   GOTO/253                  ?0        ?1                   ?32                 	;0
53  48   FETCH_STATIC_PROP_IS/176  $17=      33:'rRequest'        34:'XUI'            	;0
54  48   ISSET_ISEMPTY_DIM_OBJ/115 #18=      $17                  36:'id'             	;33554432
55  48   BOOL_NOT/13               #19=      #18                  ?0                  	;0
56  48   JMPNZ_EX/47               #19=      #19                  ?65                 	;0	>>65
57  48   INIT_FCALL_BY_NAME/59     ?0        ?0                   37:'DEf05eCdb21B0A50'	;1
58  48   FETCH_STATIC_PROP_FUNC_ARG/177 $20=      39:'rRequest'        40:'XUI'            	;1
59  48   FETCH_DIM_FUNC_ARG/93     $21=      $20                  42:'id'             	;1
60  48   SEND_VAR_EX/66            ?80       $21                  ?1                  	;0
61  48   DO_FCALL_BY_NAME/131      $22=      ?0                   ?0                  	;0
62  48   ASSIGN/38                 $23=      16?0                 $22                 	;0
63  48   BOOL_NOT/13               #24=      $23                  ?0                  	;0
64  48   BOOL/52                   #19=      #24                  ?0                  	;0
65  48   BOOL_NOT/13               #25=      #19                  ?0                  	;0	<<56
66  48   JMPZ/43                   ?0        #25                  ?68                 	;0	>>68
67  49   GOTO/253                  ?0        ?70                  ?43                 	;0
68  51   INIT_FCALL_BY_NAME/59     ?0        ?0                   44:'E72F42A93714BA87'	;0	<<66
69  51   DO_FCALL_BY_NAME/131      ?21       ?0                   ?0                  	;0
70  53   INIT_FCALL_BY_NAME/59     ?0        ?0                   46:'e589A4bf54a2daD1'	;2
71  53   SEND_VAL_EX/116           ?80       48:'user'            ?1                  	;0
72  53   FETCH_DIM_FUNC_ARG/93     $27=      16?0                 49:'member_id'      	;2
73  53   SEND_VAR_EX/66            ?96       $27                  ?2                  	;0
74  53   DO_FCALL_BY_NAME/131      $28=      ?0                   ?0                  	;0
75  53   JMPZ/43                   ?0        $28                  ?77                 	;0	>>77
76  54   GOTO/253                  ?0        ?88                  ?50                 	;0
77  56   EXIT/79                   ?0        ?0                   ?0                  	;0	<<75
78  57   GOTO/253                  ?0        ?88                  ?51                 	;0
79  59   INCLUDE_OR_EVAL/73        ?24       52:'session.php'     ?0                  	;2	<<0
80  60   INCLUDE_OR_EVAL/73        ?25       53:'functions.php'   ?0                  	;2
81  61   INIT_FCALL_BY_NAME/59     ?0        ?0                   54:'BAf6e9eF7775B5a9'	;0
82  61   DO_FCALL_BY_NAME/131      $31=      ?0                   ?0                  	;0
83  61   JMPZ/43                   ?0        $31                  ?85                 	;0	>>85
84  62   GOTO/253                  ?0        ?87                  ?56                 	;0
85  64   INIT_FCALL_BY_NAME/59     ?0        ?0                   57:'e72f42a93714bA87'	;0	<<83
86  64   DO_FCALL_BY_NAME/131      ?27       ?0                   ?0                  	;0
87  66   GOTO/253                  ?0        ?53                  ?59                 	;0
88  69   FETCH_DIM_R/81            $33=      16?2                 60:'id'             	;0
89  69   FETCH_DIM_R/81            $34=      16?0                 61:'member_id'      	;0
90  69   IS_NOT_EQUAL/18           #35=      $33                  $34                 	;0
91  69   JMPZ/43                   ?0        #35                  ?93                 	;0	>>93
92  70   GOTO/253                  ?0        ?100                 ?62                 	;0
93  72   INIT_METHOD_CALL/112      ?0        16?3                 63:'query'          	;2	<<91
94  72   SEND_VAL_EX/116           ?80       65:'UPDATE `tickets` SET `user_read` = 1 WHERE `id` = ?;' ?1                  	;0
95  72   FETCH_STATIC_PROP_FUNC_ARG/177 $36=      66:'rRequest'        67:'XUI'            	;2
96  72   FETCH_DIM_FUNC_ARG/93     $37=      $36                  69:'id'             	;2
97  72   SEND_VAR_EX/66            ?96       $37                  ?2                  	;0
98  72   DO_FCALL/60               ?33       ?0                   ?0                  	;0
99  73   GOTO/253                  ?0        ?107                 ?70                 	;0
100 75   GOTO/253                  ?0        ?101                 ?71                 	;0
101 77   INIT_METHOD_CALL/112      ?0        16?3                 72:'query'          	;2
102 77   SEND_VAL_EX/116           ?80       74:'UPDATE `tickets` SET `admin_read` = 1 WHERE `id` = ?;' ?1                  	;0
103 77   FETCH_STATIC_PROP_FUNC_ARG/177 $39=      75:'rRequest'        76:'XUI'            	;2
104 77   FETCH_DIM_FUNC_ARG/93     $40=      $39                  78:'id'             	;2
105 77   SEND_VAR_EX/66            ?96       $40                  ?2                  	;0
106 77   DO_FCALL/60               ?36       ?0                   ?0                  	;0
107 79   ASSIGN/38                 ?37       16?4                 79:'View Ticket'    	;0
108 80   INCLUDE_OR_EVAL/73        ?38       80:'header.php'      ?0                  	;2
109 81   ECHO/40                   ?0        81:'<div class="wrapper boxed-layout-ext">
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
					<div class="page-title-right">
                        ' ?0                  	;0
110 82   GOTO/253                  ?0        ?3                   ?82                 	;0
111 84   INCLUDE_OR_EVAL/73        ?39       83:'footer.php'      ?0                  	;2
112 85   NOP/0                     ?0        84:1                 ?0                  	;4294967295
*/

?>