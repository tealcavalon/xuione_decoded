<?php


/*
#Line #Lineno #Opcode            #Result   #OP1                 #OP2                    #Extended Value #jmptos #jmpfroms
0   3    JMP/42                    ?0        ?79                  ?0                  	;0	>>79
1   5    ECHO/40                   ?0        1:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="source_server">Source Server</label>
													<div class="col-md-8">
														<select name="source_server" id="source_server" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
2   6    FE_RESET_R/77             $6=       16?0                 ?18                 	;0
3   6    FE_FETCH_R/78             ?0        $6                   16?1                	;18	>>18	<<17
4   7    ECHO/40                   ?0        2:'															<option value="' ?0                  	;0
5   8    INIT_FCALL_BY_NAME/59     ?0        ?0                   3:'intval'          	;1
6   8    FETCH_DIM_FUNC_ARG/93     $7=       16?1                 5:'id'              	;1
7   8    SEND_VAR_EX/66            ?80       $7                   ?1                  	;0
8   8    DO_FCALL_BY_NAME/131      $8=       ?0                   ?0                  	;0
9   8    ECHO/40                   ?0        $8                   ?0                  	;0
10  9    ECHO/40                   ?0        6:'">'               ?0                  	;0
11  10   INIT_FCALL_BY_NAME/59     ?0        ?0                   7:'htmlspecialchars'	;1
12  10   FETCH_DIM_FUNC_ARG/93     $9=       16?1                 9:'server_name'     	;1
13  10   SEND_VAR_EX/66            ?80       $9                   ?1                  	;0
14  10   DO_FCALL_BY_NAME/131      $10=      ?0                   ?0                  	;0
15  10   ECHO/40                   ?0        $10                  ?0                  	;0
16  11   ECHO/40                   ?0        10:'</option>
															' ?0                  	;0
17  12   JMP/42                    ?0        ?3                   ?0                  	;0	>>3
18  12   FE_FREE/127               ?0        $6                   ?0                  	;0	<<2
19  15   ECHO/40                   ?0        11:'														</select>
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="replacement_server">Replacement Server</label>
													<div class="col-md-8">
														<select name="replacement_server" id="replacement_server" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
20  16   FE_RESET_R/77             $11=      16?0                 ?36                 	;0
21  16   FE_FETCH_R/78             ?0        $11                  16?1                	;36	>>36	<<35
22  17   ECHO/40                   ?0        12:'															<option value="' ?0                  	;0
23  18   INIT_FCALL_BY_NAME/59     ?0        ?0                   13:'intval'         	;1
24  18   FETCH_DIM_FUNC_ARG/93     $12=      16?1                 15:'id'             	;1
25  18   SEND_VAR_EX/66            ?80       $12                  ?1                  	;0
26  18   DO_FCALL_BY_NAME/131      $13=      ?0                   ?0                  	;0
27  18   ECHO/40                   ?0        $13                  ?0                  	;0
28  19   ECHO/40                   ?0        16:'">'              ?0                  	;0
29  20   INIT_FCALL_BY_NAME/59     ?0        ?0                   17:'htmlspecialchars'	;1
30  20   FETCH_DIM_FUNC_ARG/93     $14=      16?1                 19:'server_name'    	;1
31  20   SEND_VAR_EX/66            ?80       $14                  ?1                  	;0
32  20   DO_FCALL_BY_NAME/131      $15=      ?0                   ?0                  	;0
33  20   ECHO/40                   ?0        $15                  ?0                  	;0
34  21   ECHO/40                   ?0        20:'</option>
															' ?0                  	;0
35  22   JMP/42                    ?0        ?21                  ?0                  	;0	>>21
36  22   FE_FREE/127               ?0        $11                  ?0                  	;0	<<20
37  24   GOTO/253                  ?0        ?77                  ?21                 	;0
38  26   ISSET_ISEMPTY_CV/197      #16=      16?2                 ?0                  	;33554432
39  26   JMPZ_EX/46                #16=      #16                  ?42                 	;0	>>42
40  26   IS_EQUAL/17               #17=      16?2                 22:2                	;0
41  26   BOOL/52                   #16=      #17                  ?0                  	;0
42  26   BOOL_NOT/13               #18=      #16                  ?0                  	;0	<<39
43  26   JMPZ/43                   ?0        #18                  ?45                 	;0	>>45
44  27   GOTO/253                  ?0        ?46                  ?23                 	;0
45  29   ECHO/40                   ?0        24:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Streams have been moved from the source server to the replacement server.
				</div>
				' ?0                  	;0	<<43
46  31   GOTO/253                  ?0        ?89                  ?25                 	;0
47  33   GOTO/253                  ?0        ?88                  ?26                 	;0
48  36   ECHO/40                   ?0        27:'>
    <div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="page-title-box">
                    <div class="page-title-right">
                        ' ?0                  	;0
49  37   INCLUDE_OR_EVAL/73        ?13       28:'topbar.php'      ?0                  	;2
50  38   ECHO/40                   ?0        29:'					</div>
					<h4 class="page-title">Stream Tools</h4>
				</div>
			</div>
		</div>     
		<div class="row">
			<div class="col-xl-12">
				' ?0                  	;0
51  39   ISSET_ISEMPTY_CV/197      #20=      16?2                 ?0                  	;33554432
52  39   JMPZ_EX/46                #20=      #20                  ?55                 	;0	>>55
53  39   IS_EQUAL/17               #21=      16?2                 30:1                	;0
54  39   BOOL/52                   #20=      #21                  ?0                  	;0
55  39   JMPZ/43                   ?0        #20                  ?57                 	;0	>>57	<<52
56  40   GOTO/253                  ?0        ?47                  ?31                 	;0
57  42   GOTO/253                  ?0        ?38                  ?32                 	;0	<<55
58  44   ASSIGN/38                 ?16       16?3                 33:'Stream Tools'   	;0
59  45   INCLUDE_OR_EVAL/73        ?17       34:'header.php'      ?0                  	;2
60  46   ECHO/40                   ?0        35:'<div class="wrapper boxed-layout"' ?0                  	;0
61  47   FETCH_IS/89               $24=      36:'_SERVER'         ?0                  	;0
62  47   ISSET_ISEMPTY_DIM_OBJ/115 #25=      $24                  37:'HTTP_X_REQUESTED_WITH'	;16777216
63  47   BOOL_NOT/13               #26=      #25                  ?0                  	;0
64  47   JMPZ_EX/46                #26=      #26                  ?72                 	;0	>>72
65  47   INIT_FCALL_BY_NAME/59     ?0        ?0                   38:'strtolower'     	;1
66  47   FETCH_FUNC_ARG/92         $27=      40:'_SERVER'         ?0                  	;1
67  47   FETCH_DIM_FUNC_ARG/93     $28=      $27                  41:'HTTP_X_REQUESTED_WITH'	;1
68  47   SEND_VAR_EX/66            ?80       $28                  ?1                  	;0
69  47   DO_FCALL_BY_NAME/131      $29=      ?0                   ?0                  	;0
70  47   IS_EQUAL/17               #30=      $29                  42:'xmlhttprequest' 	;0
71  47   BOOL/52                   #26=      #30                  ?0                  	;0
72  47   BOOL_NOT/13               #31=      #26                  ?0                  	;0	<<64
73  47   JMPZ/43                   ?0        #31                  ?75                 	;0	>>75
74  48   GOTO/253                  ?0        ?48                  ?43                 	;0
75  50   ECHO/40                   ?0        44:' style="display: none;"' ?0                  	;0	<<73
76  51   GOTO/253                  ?0        ?48                  ?45                 	;0
77  54   ECHO/40                   ?0        46:'														</select>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="move_streams" id="move_streams" type="submit" class="btn btn-primary" value="Move Streams" />
											</li>
										</ul>
									</form>
								</div>
                                <div class="tab-pane" id="url-decrypt">
									<form action="#" method="POST" id="decrypt_form" data-parsley-validate="">
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													This tool will allow you to decrypt URL\'s or parts of an URL that your service encrypted.
												</p>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="encrypted_text">Encrypted Text</label>
													<div class="col-md-8">
														<textarea class="form-control" id="encrypted_text" name="encrypted_text" rows="8"></textarea>
													</div>
												</div>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="decrypted_text">Decrypted Text</label>
													<div class="col-md-8">
														<textarea class="form-control" id="decrypted_text" name="decrypted_text" rows="8" readonly></textarea>
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="url_decrypt" id="url_decrypt" type="button" onClick="decryptText();" class="btn btn-primary" value="Decrypt Text" />
											</li>
										</ul>
									</form>
								</div>
							</div> 
						</div> 
					</div> 
				</div> 
			</div> 
		</div>
	</div>
</div>
' ?0                  	;0
78  55   GOTO/253                  ?0        ?101                 ?47                 	;0
79  57   INCLUDE_OR_EVAL/73        ?26       48:'session.php'     ?0                  	;2	<<0
80  58   INCLUDE_OR_EVAL/73        ?27       49:'functions.php'   ?0                  	;2
81  59   INIT_FCALL_BY_NAME/59     ?0        ?0                   50:'e6D500E19634d513'	;0
82  59   DO_FCALL_BY_NAME/131      $34=      ?0                   ?0                  	;0
83  59   JMPZ/43                   ?0        $34                  ?85                 	;0	>>85
84  60   GOTO/253                  ?0        ?87                  ?52                 	;0
85  62   INIT_FCALL_BY_NAME/59     ?0        ?0                   53:'E72F42A93714ba87'	;0	<<83
86  62   DO_FCALL_BY_NAME/131      ?29       ?0                   ?0                  	;0
87  64   GOTO/253                  ?0        ?58                  ?55                 	;0
88  66   ECHO/40                   ?0        56:'				<div class="alert alert-success alert-dismissible fade show" role="alert">
					<button type="button" class="close" data-dismiss="alert" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
					Stream DNS replacement was successful. 
				</div>
				' ?0                  	;0
89  68   ECHO/40                   ?0        57:'				<div class="card">
					<div class="card-body">
						<div id="basicwizard">
							<ul class="nav nav-pills bg-light nav-justified form-wizard-header mb-4">
								<li class="nav-item">
									<a href="#dns-replacement" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-dns mr-1"></i>
										<span class="d-none d-sm-inline">DNS Replacement</span>
									</a>
								</li>
								<li class="nav-item">
									<a href="#move-streams" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-folder-move mr-1"></i>
										<span class="d-none d-sm-inline">Move Streams</span>
									</a>
								</li>
                                <li class="nav-item">
									<a href="#url-decrypt" data-toggle="tab" class="nav-link rounded-0 pt-2 pb-2"> 
										<i class="mdi mdi-lock-open mr-1"></i>
										<span class="d-none d-sm-inline">URL Decrypt</span>
									</a>
								</li>
							</ul>
							<div class="tab-content b-0 mb-0 pt-0">
								<div class="tab-pane" id="dns-replacement">
									<form action="#" method="POST" id="dns_form" data-parsley-validate="">
                                        <input type="hidden" name="replace_dns" value="true" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													The DNS replacement tool can be used to replace the domain name of a stream with another. It can replace any text within a stream, such as username and password.
												</p>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="old_dns">Old DNS</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="old_dns" name="old_dns" value="" placeholder="http://example.com" required data-parsley-trigger="change">
													</div>
												</div>
												<div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="new_dns">New DNS</label>
													<div class="col-md-8">
														<input type="text" class="form-control" id="new_dns" name="new_dns" value="" placeholder="http://newdns.com" required data-parsley-trigger="change">
													</div>
												</div>
											</div> 
										</div> 
										<ul class="list-inline wizard mb-0">
											<li class="list-inline-item float-right">
												<input name="replace_dns" id="replace_dns" type="submit" class="btn btn-primary" value="Replace DNS" />
											</li>
										</ul>
									</form>
								</div>
								<div class="tab-pane" id="move-streams">
									<form action="#" method="POST" id="move_form" data-parsley-validate="">
                                        <input type="hidden" name="move_streams" value="true" />
										<div class="row">
											<div class="col-12">
												<p class="sub-header">
													This tool will allow you to move all streams from one server to another.
												</p>
                                                <div class="form-group row mb-4">
													<label class="col-md-4 col-form-label" for="content_type">Content</label>
													<div class="col-md-8">
														<select name="content_type" id="content_type" class="form-control select2" data-toggle="select2">
															' ?0                  	;0
90  69   FE_RESET_R/77             $36=      58:array (
  0 => 'Everything',
  1 => 'Live Streams',
  3 => 'Created Channels',
  2 => 'Movies',
  5 => 'TV Shows',
  4 => 'Radio Stations',
) ?99                 	;0
91  69   FE_FETCH_R/78             #37=      $36                  16?4                	;99	>>99	<<98
92  69   ASSIGN/38                 ?32       16?5                 #37                 	;0
93  70   ECHO/40                   ?0        59:'															<option value="' ?0                  	;0
94  71   ECHO/40                   ?0        16?5                 ?0                  	;0
95  72   ECHO/40                   ?0        60:'">'              ?0                  	;0
96  73   ECHO/40                   ?0        16?4                 ?0                  	;0
97  74   ECHO/40                   ?0        61:'</option>
															' ?0                  	;0
98  75   JMP/42                    ?0        ?91                  ?0                  	;0	>>91
99  75   FE_FREE/127               ?0        $36                  ?0                  	;0	<<90
100 78   GOTO/253                  ?0        ?1                   ?62                 	;0
101 80   INCLUDE_OR_EVAL/73        ?33       63:'footer.php'      ?0                  	;2
102 81   NOP/0                     ?0        64:1                 ?0                  	;4294967295
*/

?>