<!--cachetime:1382184544--><?php
			App::uses('TasksController', 'Controller');
			
				$request = unserialize(base64_decode('TzoxMToiQ2FrZVJlcXVlc3QiOjk6e3M6NjoicGFyYW1zIjthOjY6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToiVGFza3MiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fXM6NjoibW9kZWxzIjthOjI6e3M6NDoiVGFzayI7YToyOntzOjY6InBsdWdpbiI7TjtzOjk6ImNsYXNzTmFtZSI7czo0OiJUYXNrIjt9czo0OiJOb3RlIjthOjI6e3M6NjoicGx1Z2luIjtOO3M6OToiY2xhc3NOYW1lIjtzOjQ6Ik5vdGUiO319fXM6NDoiZGF0YSI7YTowOnt9czo1OiJxdWVyeSI7YTowOnt9czozOiJ1cmwiO3M6MTE6IlRhc2tzL2luZGV4IjtzOjQ6ImJhc2UiO3M6ODoiL2Nha2VwaHAiO3M6Nzoid2Vicm9vdCI7czo5OiIvY2FrZXBocC8iO3M6NDoiaGVyZSI7czoyMDoiL2Nha2VwaHAvVGFza3MvaW5kZXgiO3M6MTM6IgAqAF9kZXRlY3RvcnMiO2E6MTE6e3M6MzoiZ2V0IjthOjI6e3M6MzoiZW52IjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czo1OiJ2YWx1ZSI7czozOiJHRVQiO31zOjQ6InBvc3QiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjQ6IlBPU1QiO31zOjM6InB1dCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6MzoiUFVUIjt9czo2OiJkZWxldGUiO2E6Mjp7czozOiJlbnYiO3M6MTQ6IlJFUVVFU1RfTUVUSE9EIjtzOjU6InZhbHVlIjtzOjY6IkRFTEVURSI7fXM6NDoiaGVhZCI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NDoiSEVBRCI7fXM6Nzoib3B0aW9ucyI7YToyOntzOjM6ImVudiI7czoxNDoiUkVRVUVTVF9NRVRIT0QiO3M6NToidmFsdWUiO3M6NzoiT1BUSU9OUyI7fXM6Mzoic3NsIjthOjI6e3M6MzoiZW52IjtzOjU6IkhUVFBTIjtzOjU6InZhbHVlIjtpOjE7fXM6NDoiYWpheCI7YToyOntzOjM6ImVudiI7czoyMToiSFRUUF9YX1JFUVVFU1RFRF9XSVRIIjtzOjU6InZhbHVlIjtzOjE0OiJYTUxIdHRwUmVxdWVzdCI7fXM6NToiZmxhc2giO2E6Mjp7czozOiJlbnYiO3M6MTU6IkhUVFBfVVNFUl9BR0VOVCI7czo3OiJwYXR0ZXJuIjtzOjI2OiIvXihTaG9ja3dhdmV8QWRvYmUpIEZsYXNoLyI7fXM6NjoibW9iaWxlIjthOjI6e3M6MzoiZW52IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6Nzoib3B0aW9ucyI7YToyNjp7aTowO3M6NzoiQW5kcm9pZCI7aToxO3M6NzoiQXZhbnRHbyI7aToyO3M6MTA6IkJsYWNrQmVycnkiO2k6MztzOjY6IkRvQ29NbyI7aTo0O3M6NjoiRmVubmVjIjtpOjU7czo0OiJpUG9kIjtpOjY7czo2OiJpUGhvbmUiO2k6NztzOjQ6ImlQYWQiO2k6ODtzOjQ6IkoyTUUiO2k6OTtzOjQ6Ik1JRFAiO2k6MTA7czo4OiJOZXRGcm9udCI7aToxMTtzOjU6Ik5va2lhIjtpOjEyO3M6MTA6Ik9wZXJhIE1pbmkiO2k6MTM7czoxMDoiT3BlcmEgTW9iaSI7aToxNDtzOjY6IlBhbG1PUyI7aToxNTtzOjEwOiJQYWxtU291cmNlIjtpOjE2O3M6OToicG9ydGFsbW1tIjtpOjE3O3M6NzoiUGx1Y2tlciI7aToxODtzOjE0OiJSZXF3aXJlbGVzc1dlYiI7aToxOTtzOjEyOiJTb255RXJpY3Nzb24iO2k6MjA7czo3OiJTeW1iaWFuIjtpOjIxO3M6MTE6IlVQXC5Ccm93c2VyIjtpOjIyO3M6NToid2ViT1MiO2k6MjM7czoxMDoiV2luZG93cyBDRSI7aToyNDtzOjE2OiJXaW5kb3dzIFBob25lIE9TIjtpOjI1O3M6NToiWGlpbm8iO319czo5OiJyZXF1ZXN0ZWQiO2E6Mjp7czo1OiJwYXJhbSI7czo5OiJyZXF1ZXN0ZWQiO3M6NToidmFsdWUiO2k6MTt9fXM6OToiACoAX2lucHV0IjtzOjA6IiI7fQ=='));
				$response = new CakeResponse();
				$controller = new TasksController($request, $response);
				$controller->plugin = $this->plugin = '';
				$controller->helpers = $this->helpers = unserialize(base64_decode('YTo2OntpOjA7czo1OiJUaXRsZSI7aToxO3M6NToiQ2FjaGUiO2k6MjtzOjY6Ik51bWJlciI7aTozO3M6MjA6IkRlYnVnS2l0LlNpbXBsZUdyYXBoIjtpOjQ7czoxOToiRGVidWdLaXQuRGVidWdUaW1lciI7czoxNjoiRGVidWdLaXQuVG9vbGJhciI7YTo0OntzOjY6Im91dHB1dCI7czoyMDoiRGVidWdLaXQuSHRtbFRvb2xiYXIiO3M6ODoiY2FjaGVLZXkiO3M6NDU6InRvb2xiYXJfY2FjaGUwZWVkNDA0MmFkNWYzOWQxMGViYjMxOTQ4MzFhMmE5OCI7czoxMToiY2FjaGVDb25maWciO3M6OToiZGVidWdfa2l0IjtzOjExOiJmb3JjZUVuYWJsZSI7YjowO319'));
				$controller->layout = $this->layout = 'default';
				$controller->theme = $this->theme = '';
				$controller->viewVars = unserialize(base64_decode('YTo3OntzOjE4OiJkZWJ1Z1Rvb2xiYXJQYW5lbHMiO2E6OTp7czo3OiJoaXN0b3J5IjthOjU6e3M6NzoiY29udGVudCI7YTo0OntpOjA7YToyOntzOjU6InRpdGxlIjtzOjEyOiJUYXNrcy9jcmVhdGUiO3M6MzoidXJsIjthOjQ6e3M6NjoicGx1Z2luIjtzOjk6ImRlYnVnX2tpdCI7czoxMDoiY29udHJvbGxlciI7czoxNDoidG9vbGJhcl9hY2Nlc3MiO3M6NjoiYWN0aW9uIjtzOjEzOiJoaXN0b3J5X3N0YXRlIjtpOjA7aToxO319aToxO2E6Mjp7czo1OiJ0aXRsZSI7czo5OiJUYXNrcy9hbGwiO3M6MzoidXJsIjthOjQ6e3M6NjoicGx1Z2luIjtzOjk6ImRlYnVnX2tpdCI7czoxMDoiY29udHJvbGxlciI7czoxNDoidG9vbGJhcl9hY2Nlc3MiO3M6NjoiYWN0aW9uIjtzOjEzOiJoaXN0b3J5X3N0YXRlIjtpOjA7aToyO319aToyO2E6Mjp7czo1OiJ0aXRsZSI7czoxMToiVGFza3MvaW5kZXgiO3M6MzoidXJsIjthOjQ6e3M6NjoicGx1Z2luIjtzOjk6ImRlYnVnX2tpdCI7czoxMDoiY29udHJvbGxlciI7czoxNDoidG9vbGJhcl9hY2Nlc3MiO3M6NjoiYWN0aW9uIjtzOjEzOiJoaXN0b3J5X3N0YXRlIjtpOjA7aTozO319aTozO2E6Mjp7czo1OiJ0aXRsZSI7czoxMToidXNlcnMvbG9naW4iO3M6MzoidXJsIjthOjQ6e3M6NjoicGx1Z2luIjtzOjk6ImRlYnVnX2tpdCI7czoxMDoiY29udHJvbGxlciI7czoxNDoidG9vbGJhcl9hY2Nlc3MiO3M6NjoiYWN0aW9uIjtzOjEzOiJoaXN0b3J5X3N0YXRlIjtpOjA7aTo0O319fXM6MTE6ImVsZW1lbnROYW1lIjtzOjEzOiJoaXN0b3J5X3BhbmVsIjtzOjY6InBsdWdpbiI7czo4OiJEZWJ1Z0tpdCI7czo1OiJ0aXRsZSI7TjtzOjEyOiJkaXNhYmxlVGltZXIiO2I6MTt9czo3OiJzZXNzaW9uIjthOjU6e3M6NzoiY29udGVudCI7YTozOntzOjY6IkNvbmZpZyI7YTozOntzOjk6InVzZXJBZ2VudCI7czozMjoiMGVlZDQwNDJhZDVmMzlkMTBlYmIzMTk0ODMxYTJhOTgiO3M6NDoidGltZSI7aToxMzgyMTk1MzQzO3M6OToiY291bnRkb3duIjtpOjM7fXM6NzoiTWVzc2FnZSI7YToxOntzOjQ6ImF1dGgiO2E6Mzp7czo3OiJtZXNzYWdlIjtzOjQ3OiJZb3UgYXJlIG5vdCBhdXRob3JpemVkIHRvIGFjY2VzcyB0aGF0IGxvY2F0aW9uLiI7czo3OiJlbGVtZW50IjtzOjc6ImRlZmF1bHQiO3M6NjoicGFyYW1zIjthOjA6e319fXM6NDoiQXV0aCI7YToxOntzOjQ6IlVzZXIiO2E6Mjp7czoyOiJpZCI7czoxOiIxIjtzOjg6InVzZXJuYW1lIjtzOjM6ImFhYSI7fX19czoxMToiZWxlbWVudE5hbWUiO3M6MTM6InNlc3Npb25fcGFuZWwiO3M6NjoicGx1Z2luIjtzOjg6IkRlYnVnS2l0IjtzOjU6InRpdGxlIjtOO3M6MTI6ImRpc2FibGVUaW1lciI7YjoxO31zOjc6InJlcXVlc3QiO2E6NTp7czo3OiJjb250ZW50IjthOjY6e3M6NjoicGFyYW1zIjthOjU6e3M6NjoicGx1Z2luIjtOO3M6MTA6ImNvbnRyb2xsZXIiO3M6NToiVGFza3MiO3M6NjoiYWN0aW9uIjtzOjU6ImluZGV4IjtzOjU6Im5hbWVkIjthOjA6e31zOjQ6InBhc3MiO2E6MDp7fX1zOjM6InVybCI7czoxMToiVGFza3MvaW5kZXgiO3M6NToicXVlcnkiO2E6MDp7fXM6NDoiZGF0YSI7YTowOnt9czozOiJnZXQiO2E6MDp7fXM6MTI6ImN1cnJlbnRSb3V0ZSI7Tzo5OiJDYWtlUm91dGUiOjc6e3M6NDoia2V5cyI7YToyOntpOjA7czoxMDoiY29udHJvbGxlciI7aToxO3M6NjoiYWN0aW9uIjt9czo3OiJvcHRpb25zIjthOjA6e31zOjg6ImRlZmF1bHRzIjthOjE6e3M6NjoicGx1Z2luIjtOO31zOjg6InRlbXBsYXRlIjtzOjIyOiIvOmNvbnRyb2xsZXIvOmFjdGlvbi8qIjtzOjEwOiIAKgBfZ3JlZWR5IjtiOjE7czoxNzoiACoAX2NvbXBpbGVkUm91dGUiO3M6NzY6IiNeLyg/Oig/UDxjb250cm9sbGVyPlteL10rKSkvKD86KD9QPGFjdGlvbj5bXi9dKykpKD86Lyg/UDxfYXJnc18+LiopKT9bL10qJCMiO3M6MTM6IgAqAF9oZWFkZXJNYXAiO2E6Mzp7czo0OiJ0eXBlIjtzOjEyOiJjb250ZW50X3R5cGUiO3M6NjoibWV0aG9kIjtzOjE0OiJyZXF1ZXN0X21ldGhvZCI7czo2OiJzZXJ2ZXIiO3M6MTE6InNlcnZlcl9uYW1lIjt9fX1zOjExOiJlbGVtZW50TmFtZSI7czoxMzoicmVxdWVzdF9wYW5lbCI7czo2OiJwbHVnaW4iO3M6ODoiRGVidWdLaXQiO3M6NToidGl0bGUiO047czoxMjoiZGlzYWJsZVRpbWVyIjtiOjE7fXM6Njoic3FsbG9nIjthOjU6e3M6NzoiY29udGVudCI7YToyOntzOjExOiJjb25uZWN0aW9ucyI7YToxOntzOjc6ImRlZmF1bHQiO2I6MTt9czo5OiJ0aHJlc2hvbGQiO2k6MjA7fXM6MTE6ImVsZW1lbnROYW1lIjtzOjEyOiJzcWxsb2dfcGFuZWwiO3M6NjoicGx1Z2luIjtzOjg6IkRlYnVnS2l0IjtzOjU6InRpdGxlIjtOO3M6MTI6ImRpc2FibGVUaW1lciI7YjoxO31zOjU6InRpbWVyIjthOjU6e3M6NzoiY29udGVudCI7TjtzOjExOiJlbGVtZW50TmFtZSI7czoxMToidGltZXJfcGFuZWwiO3M6NjoicGx1Z2luIjtzOjg6IkRlYnVnS2l0IjtzOjU6InRpdGxlIjtOO3M6MTI6ImRpc2FibGVUaW1lciI7YjoxO31zOjM6ImxvZyI7YTo1OntzOjc6ImNvbnRlbnQiO086MTE6IkRlYnVnS2l0TG9nIjoxOntzOjQ6ImxvZ3MiO2E6MDp7fX1zOjExOiJlbGVtZW50TmFtZSI7czo5OiJsb2dfcGFuZWwiO3M6NjoicGx1Z2luIjtzOjg6IkRlYnVnS2l0IjtzOjU6InRpdGxlIjtOO3M6MTI6ImRpc2FibGVUaW1lciI7YjoxO31zOjk6InZhcmlhYmxlcyI7YTo1OntzOjc6ImNvbnRlbnQiO2E6Mjp7czoxMDoidGFza3NfZGF0YSI7YTo2OntpOjA7YToyOntzOjQ6IlRhc2siO2E6Nzp7czoyOiJpZCI7czoxOiIyIjtzOjQ6Im5hbWUiO3M6Mjg6ImNha2VwaHDjga7jgqTjg7Pjgrnjg4jjg7zjg6siO3M6NDoiYm9keSI7czoyMToi55Kw5aKD6Kit5a6a44KS44GZ44KLIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjg6ImR1ZV9kYXRlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0wNy0wNiAxNzo1MjoxNCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0wNy0wNiAxNzo1MjoxNCI7fXM6NDoiTm90ZSI7YTozOntpOjA7YTo1OntzOjI6ImlkIjtzOjE6IjMiO3M6NzoidGFza19pZCI7czoxOiIyIjtzOjQ6ImJvZHkiO3M6MTg6IuODgOOCpuODs+ODreODvOODiSI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTA3LTEzIDE4OjM0OjU2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTA3LTEzIDE4OjM0OjU2Ijt9aToxO2E6NTp7czoyOiJpZCI7czoxOiI0IjtzOjc6InRhc2tfaWQiO3M6MToiMiI7czo0OiJib2R5IjtzOjk6IuOCs+ODlOODvCI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTA3LTEzIDE4OjM1OjE0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTA3LTEzIDE4OjM1OjE0Ijt9aToyO2E6NTp7czoyOiJpZCI7czoxOiI2IjtzOjc6InRhc2tfaWQiO3M6MToiMiI7czo0OiJib2R5IjtzOjEyOiJpbmnjga7oqK3lrpoiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0wNy0xMyAxODozNjoxMyI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0wNy0xMyAxODozNjoxMyI7fX19aToxO2E6Mjp7czo0OiJUYXNrIjthOjc6e3M6MjoiaWQiO3M6MjoiMTAiO3M6NDoibmFtZSI7czo4OiJuZXdUYXNrMiI7czo0OiJib2R5IjtzOjEzOiI4LzE3IG5vMiB0YXNrIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjg6ImR1ZV9kYXRlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0wOC0xNyAyMDoyMjowOCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0wOC0xNyAyMDoyMjowOCI7fXM6NDoiTm90ZSI7YTowOnt9fWk6MjthOjI6e3M6NDoiVGFzayI7YTo3OntzOjI6ImlkIjtzOjI6IjEyIjtzOjQ6Im5hbWUiO3M6ODoibmV3VGFzazMiO3M6NDoiYm9keSI7czoxMzoiOC8xNyBubzMgdGFzayI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo4OiJkdWVfZGF0ZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDgtMTcgMjA6MzE6MDAiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDgtMTcgMjA6MzE6MDAiO31zOjQ6Ik5vdGUiO2E6MDp7fX1pOjM7YToyOntzOjQ6IlRhc2siO2E6Nzp7czoyOiJpZCI7czoxOiI0IjtzOjQ6Im5hbWUiO3M6MTg6IuODnuOCpuOCueOBruaOg+mZpCI7czo0OiJib2R5IjtzOjI0OiLjg57jgqbjgrnjgpLmjoPpmaTjgZnjgosiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6ODoiZHVlX2RhdGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTA3LTIwIDIwOjIxOjE2IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTA3LTIwIDIwOjIxOjE2Ijt9czo0OiJOb3RlIjthOjE6e2k6MDthOjU6e3M6MjoiaWQiO3M6MToiNyI7czo3OiJ0YXNrX2lkIjtzOjE6IjQiO3M6NDoiYm9keSI7czoxODoi44GK5o6D6Zmk5a6M5LqG44GLIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTAtMDUgMTc6NDE6NDQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTAtMDUgMTc6NDE6NDQiO319fWk6NDthOjI6e3M6NDoiVGFzayI7YTo3OntzOjI6ImlkIjtzOjE6IjMiO3M6NDoibmFtZSI7czozMDoi5paw6KaP5YWl5Yqb44GL44KJ44Gu44K/44K544KvIjtzOjQ6ImJvZHkiO3M6Mzk6IuaWsOimj+WFpeWKm+OBi+OCieOBruOCv+OCueOCr+OBruips+e0sCI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo4OiJkdWVfZGF0ZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDctMDYgMTk6NTA6MzAiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDctMTMgMjE6MDg6MzEiO31zOjQ6Ik5vdGUiO2E6MDp7fX1pOjU7YToyOntzOjQ6IlRhc2siO2E6Nzp7czoyOiJpZCI7czoyOiIxMyI7czo0OiJuYW1lIjtzOjEyOiLoqIjmuKzjgZnjgosiO3M6NDoiYm9keSI7czozOToiQmVuY2htYXJr44Kz44Oz44Od44O844ON44Oz44OI44Gu5L2c5oiQIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjg6ImR1ZV9kYXRlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0xMC0xOSAxNzozNjowMSI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0xMC0xOSAxNzozNjowMSI7fXM6NDoiTm90ZSI7YTowOnt9fX1zOjE0OiIkcmVxdWVzdC0+ZGF0YSI7YTowOnt9fXM6MTE6ImVsZW1lbnROYW1lIjtzOjE1OiJ2YXJpYWJsZXNfcGFuZWwiO3M6NjoicGx1Z2luIjtzOjg6IkRlYnVnS2l0IjtzOjU6InRpdGxlIjtOO3M6MTI6ImRpc2FibGVUaW1lciI7YjoxO31zOjExOiJlbnZpcm9ubWVudCI7YTo1OntzOjc6ImNvbnRlbnQiO2E6Mzp7czozOiJwaHAiO2E6NTc6e3M6MTE6IlBIUF9WRVJTSU9OIjtzOjU6IjUuNC43IjtzOjI1OiJSRURJUkVDVF9SRURJUkVDVF9NSUJESVJTIjtzOjM1OiIvUHJvZ3JhbUZpbGVzL3hhbXBwL3BocC9leHRyYXMvbWlicyI7czoyODoiUkVESVJFQ1RfUkVESVJFQ1RfTVlTUUxfSE9NRSI7czoxNjoiXHhhbXBwXG15c3FsXGJpbiI7czozMDoiUkVESVJFQ1RfUkVESVJFQ1RfT1BFTlNTTF9DT05GIjtzOjQyOiIvUHJvZ3JhbUZpbGVzL3hhbXBwL2FwYWNoZS9iaW4vb3BlbnNzbC5jbmYiO3M6Mzg6IlJFRElSRUNUX1JFRElSRUNUX1BIUF9QRUFSX1NZU0NPTkZfRElSIjtzOjEwOiJceGFtcHBccGhwIjtzOjIzOiJSRURJUkVDVF9SRURJUkVDVF9QSFBSQyI7czoxMDoiXHhhbXBwXHBocCI7czoyMToiUkVESVJFQ1RfUkVESVJFQ1RfVE1QIjtzOjEwOiJceGFtcHBcdG1wIjtzOjI0OiJSRURJUkVDVF9SRURJUkVDVF9TVEFUVVMiO3M6MzoiMjAwIjtzOjE2OiJSRURJUkVDVF9NSUJESVJTIjtzOjM1OiIvUHJvZ3JhbUZpbGVzL3hhbXBwL3BocC9leHRyYXMvbWlicyI7czoxOToiUkVESVJFQ1RfTVlTUUxfSE9NRSI7czoxNjoiXHhhbXBwXG15c3FsXGJpbiI7czoyMToiUkVESVJFQ1RfT1BFTlNTTF9DT05GIjtzOjQyOiIvUHJvZ3JhbUZpbGVzL3hhbXBwL2FwYWNoZS9iaW4vb3BlbnNzbC5jbmYiO3M6Mjk6IlJFRElSRUNUX1BIUF9QRUFSX1NZU0NPTkZfRElSIjtzOjEwOiJceGFtcHBccGhwIjtzOjE0OiJSRURJUkVDVF9QSFBSQyI7czoxMDoiXHhhbXBwXHBocCI7czoxMjoiUkVESVJFQ1RfVE1QIjtzOjEwOiJceGFtcHBcdG1wIjtzOjE1OiJSRURJUkVDVF9TVEFUVVMiO3M6MzoiMjAwIjtzOjc6Ik1JQkRJUlMiO3M6MzU6Ii9Qcm9ncmFtRmlsZXMveGFtcHAvcGhwL2V4dHJhcy9taWJzIjtzOjEwOiJNWVNRTF9IT01FIjtzOjE2OiJceGFtcHBcbXlzcWxcYmluIjtzOjEyOiJPUEVOU1NMX0NPTkYiO3M6NDI6Ii9Qcm9ncmFtRmlsZXMveGFtcHAvYXBhY2hlL2Jpbi9vcGVuc3NsLmNuZiI7czoyMDoiUEhQX1BFQVJfU1lTQ09ORl9ESVIiO3M6MTA6Ilx4YW1wcFxwaHAiO3M6NToiUEhQUkMiO3M6MTA6Ilx4YW1wcFxwaHAiO3M6MzoiVE1QIjtzOjEwOiJceGFtcHBcdG1wIjtzOjk6IkhUVFBfSE9TVCI7czo5OiJsb2NhbGhvc3QiO3M6MTU6IkhUVFBfQ09OTkVDVElPTiI7czoxMDoia2VlcC1hbGl2ZSI7czoxMToiSFRUUF9BQ0NFUFQiO3M6NzQ6InRleHQvaHRtbCxhcHBsaWNhdGlvbi94aHRtbCt4bWwsYXBwbGljYXRpb24veG1sO3E9MC45LGltYWdlL3dlYnAsKi8qO3E9MC44IjtzOjE1OiJIVFRQX1VTRVJfQUdFTlQiO3M6MTA5OiJNb3ppbGxhLzUuMCAoV2luZG93cyBOVCA2LjE7IFdPVzY0KSBBcHBsZVdlYktpdC81MzcuMzYgKEtIVE1MLCBsaWtlIEdlY2tvKSBDaHJvbWUvMzAuMC4xNTk5LjEwMSBTYWZhcmkvNTM3LjM2IjtzOjEyOiJIVFRQX1JFRkVSRVIiO3M6Mzc6Imh0dHA6Ly9sb2NhbGhvc3QvY2FrZXBocC9UYXNrcy9jcmVhdGUiO3M6MjA6IkhUVFBfQUNDRVBUX0VOQ09ESU5HIjtzOjE3OiJnemlwLGRlZmxhdGUsc2RjaCI7czoyMDoiSFRUUF9BQ0NFUFRfTEFOR1VBR0UiO3M6MjM6ImphLGVuLVVTO3E9MC44LGVuO3E9MC42IjtzOjExOiJIVFRQX0NPT0tJRSI7czo1NToiQ0FLRVBIUD1kY3VlMG8zam8wdWs5dW01cXNqcDBqcWZ0MzsgdG9vbGJhckRpc3BsYXk9aGlkZSI7czo0OiJQQVRIIjtzOjc4NjoiQzpcUHJvZ3JhbSBGaWxlc1xDb21tb24gRmlsZXNcTWljcm9zb2Z0IFNoYXJlZFxXaW5kb3dzIExpdmU7QzpcUHJvZ3JhbSBGaWxlcyAoeDg2KVxDb21tb24gRmlsZXNcTWljcm9zb2Z0IFNoYXJlZFxXaW5kb3dzIExpdmU7Qzpcd2luZG93c1xzeXN0ZW0zMjtDOlx3aW5kb3dzO0M6XHdpbmRvd3NcU3lzdGVtMzJcV2JlbTtDOlx3aW5kb3dzXFN5c3RlbTMyXFdpbmRvd3NQb3dlclNoZWxsXHYxLjBcO2M6XFByb2dyYW0gRmlsZXMgKHg4NilcQ29tbW9uIEZpbGVzXFJveGlvIFNoYXJlZFxETExTaGFyZWRcO2M6XFByb2dyYW0gRmlsZXMgKHg4NilcQ29tbW9uIEZpbGVzXFJveGlvIFNoYXJlZFxPRU1cRExMU2hhcmVkXDtjOlxQcm9ncmFtIEZpbGVzICh4ODYpXENvbW1vbiBGaWxlc1xSb3hpbyBTaGFyZWRcT0VNXERMTFNoYXJlZFw7YzpcUHJvZ3JhbSBGaWxlcyAoeDg2KVxDb21tb24gRmlsZXNcUm94aW8gU2hhcmVkXE9FTVwxMi4wXERMTFNoYXJlZFw7YzpcUHJvZ3JhbSBGaWxlcyAoeDg2KVxSb3hpb1xPRU1cQXVkaW9Db3JlXDtDOlxQcm9ncmFtIEZpbGVzXFdJRENPTU1cQmx1ZXRvb3RoIFNvZnR3YXJlXDtDOlxQcm9ncmFtIEZpbGVzXFdJRENPTU1cQmx1ZXRvb3RoIFNvZnR3YXJlXHN5c3dvdzY0O0M6XFByb2dyYW0gRmlsZXMgKHg4NilcV2luZG93cyBMaXZlXFNoYXJlZDtDOlxQcm9ncmFtIEZpbGVzICh4ODYpXElWSSBGb3VuZGF0aW9uXFZJU0FcV2luTlRcQmluO0U6XFByb2dyYW1GaWxlc1xtc3lzZ2l0XGJpbjtDOlxQcm9ncmFtIEZpbGVzXEphdmFcamRrMS43LjBfMDRcYmluIjtzOjEwOiJTeXN0ZW1Sb290IjtzOjEwOiJDOlx3aW5kb3dzIjtzOjc6IkNPTVNQRUMiO3M6Mjc6IkM6XHdpbmRvd3Ncc3lzdGVtMzJcY21kLmV4ZSI7czo3OiJQQVRIRVhUIjtzOjUzOiIuQ09NOy5FWEU7LkJBVDsuQ01EOy5WQlM7LlZCRTsuSlM7LkpTRTsuV1NGOy5XU0g7Lk1TQyI7czo2OiJXSU5ESVIiO3M6MTA6IkM6XHdpbmRvd3MiO3M6MTY6IlNFUlZFUl9TSUdOQVRVUkUiO3M6OTM6IjxhZGRyZXNzPkFwYWNoZS8yLjQuMyAoV2luMzIpIE9wZW5TU0wvMS4wLjFjIFBIUC81LjQuNyBTZXJ2ZXIgYXQgbG9jYWxob3N0IFBvcnQgODA8L2FkZHJlc3M+CiI7czoxNToiU0VSVkVSX1NPRlRXQVJFIjtzOjQ1OiJBcGFjaGUvMi40LjMgKFdpbjMyKSBPcGVuU1NMLzEuMC4xYyBQSFAvNS40LjciO3M6MTE6IlNFUlZFUl9OQU1FIjtzOjk6ImxvY2FsaG9zdCI7czoxMToiU0VSVkVSX0FERFIiO3M6MzoiOjoxIjtzOjExOiJTRVJWRVJfUE9SVCI7czoyOiI4MCI7czoxMToiUkVNT1RFX0FERFIiO3M6MzoiOjoxIjtzOjEzOiJET0NVTUVOVF9ST09UIjtzOjI4OiJFOi9Qcm9ncmFtRmlsZXMveGFtcHAvaHRkb2NzIjtzOjE0OiJSRVFVRVNUX1NDSEVNRSI7czo0OiJodHRwIjtzOjE0OiJDT05URVhUX1BSRUZJWCI7czowOiIiO3M6MjE6IkNPTlRFWFRfRE9DVU1FTlRfUk9PVCI7czoyODoiRTovUHJvZ3JhbUZpbGVzL3hhbXBwL2h0ZG9jcyI7czoxMjoiU0VSVkVSX0FETUlOIjtzOjIwOiJwb3N0bWFzdGVyQGxvY2FsaG9zdCI7czoxNToiU0NSSVBUX0ZJTEVOQU1FIjtzOjU4OiJFOi9Qcm9ncmFtRmlsZXMveGFtcHAvaHRkb2NzL2Nha2VwaHAvYXBwL3dlYnJvb3QvaW5kZXgucGhwIjtzOjExOiJSRU1PVEVfUE9SVCI7czo1OiI0OTkwNiI7czoxMjoiUkVESVJFQ1RfVVJMIjtzOjMyOiIvY2FrZXBocC9hcHAvd2Vicm9vdC9UYXNrcy9pbmRleCI7czoxNzoiR0FURVdBWV9JTlRFUkZBQ0UiO3M6NzoiQ0dJLzEuMSI7czoxNToiU0VSVkVSX1BST1RPQ09MIjtzOjg6IkhUVFAvMS4xIjtzOjE0OiJSRVFVRVNUX01FVEhPRCI7czozOiJHRVQiO3M6MTI6IlFVRVJZX1NUUklORyI7czowOiIiO3M6MTE6IlJFUVVFU1RfVVJJIjtzOjIwOiIvY2FrZXBocC9UYXNrcy9pbmRleCI7czoxMToiU0NSSVBUX05BTUUiO3M6MzA6Ii9jYWtlcGhwL2FwcC93ZWJyb290L2luZGV4LnBocCI7czo4OiJQSFBfU0VMRiI7czozMDoiL2Nha2VwaHAvYXBwL3dlYnJvb3QvaW5kZXgucGhwIjtzOjE4OiJSRVFVRVNUX1RJTUVfRkxPQVQiO2Q6MTM4MjE4MDk0My4zNzgwMDAwMjA5ODA4MzQ5NjA5Mzc1O3M6MTI6IlJFUVVFU1RfVElNRSI7aToxMzgyMTgwOTQzO31zOjQ6ImNha2UiO2E6MjM6e3M6MzoiQVBQIjtzOjQxOiJFOlxQcm9ncmFtRmlsZXNceGFtcHBcaHRkb2NzXGNha2VwaHBcYXBwXCI7czo3OiJBUFBfRElSIjtzOjM6ImFwcCI7czo3OiJBUFBMSUJTIjtzOjQ1OiJFOlxQcm9ncmFtRmlsZXNceGFtcHBcaHRkb2NzXGNha2VwaHBcYXBwXExpYlwiO3M6NToiQ0FDSEUiO3M6NTE6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocFxhcHBcdG1wXGNhY2hlXCI7czo0OiJDQUtFIjtzOjQ2OiJFOlxQcm9ncmFtRmlsZXNceGFtcHBcaHRkb2NzXGNha2VwaHBcbGliXENha2VcIjtzOjIyOiJDQUtFX0NPUkVfSU5DTFVERV9QQVRIIjtzOjQwOiJFOlxQcm9ncmFtRmlsZXNceGFtcHBcaHRkb2NzXGNha2VwaHBcbGliIjtzOjk6IkNPUkVfUEFUSCI7czo0MToiRTpcUHJvZ3JhbUZpbGVzXHhhbXBwXGh0ZG9jc1xjYWtlcGhwXGxpYlwiO3M6MTI6IkNBS0VfVkVSU0lPTiI7czo1OiIyLjMuNiI7czozOiJDU1MiO3M6NTM6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocFxhcHBcd2Vicm9vdFxjc3NcIjtzOjc6IkNTU19VUkwiO3M6NDoiY3NzLyI7czoyOiJEUyI7czoxOiJcIjtzOjEzOiJGVUxMX0JBU0VfVVJMIjtzOjE2OiJodHRwOi8vbG9jYWxob3N0IjtzOjY6IklNQUdFUyI7czo1MzoiRTpcUHJvZ3JhbUZpbGVzXHhhbXBwXGh0ZG9jc1xjYWtlcGhwXGFwcFx3ZWJyb290XGltZ1wiO3M6MTA6IklNQUdFU19VUkwiO3M6NDoiaW1nLyI7czoyOiJKUyI7czo1MjoiRTpcUHJvZ3JhbUZpbGVzXHhhbXBwXGh0ZG9jc1xjYWtlcGhwXGFwcFx3ZWJyb290XGpzXCI7czo2OiJKU19VUkwiO3M6MzoianMvIjtzOjQ6IkxPR1MiO3M6NTA6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocFxhcHBcdG1wXGxvZ3NcIjtzOjQ6IlJPT1QiO3M6MzY6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocCI7czo1OiJURVNUUyI7czo0NjoiRTpcUHJvZ3JhbUZpbGVzXHhhbXBwXGh0ZG9jc1xjYWtlcGhwXGFwcFxUZXN0XCI7czozOiJUTVAiO3M6NDU6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocFxhcHBcdG1wXCI7czo3OiJWRU5ET1JTIjtzOjQ1OiJFOlxQcm9ncmFtRmlsZXNceGFtcHBcaHRkb2NzXGNha2VwaHBcdmVuZG9yc1wiO3M6MTE6IldFQlJPT1RfRElSIjtzOjc6IndlYnJvb3QiO3M6ODoiV1dXX1JPT1QiO3M6NDk6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocFxhcHBcd2Vicm9vdFwiO31zOjM6ImFwcCI7YTowOnt9fXM6MTE6ImVsZW1lbnROYW1lIjtzOjE3OiJlbnZpcm9ubWVudF9wYW5lbCI7czo2OiJwbHVnaW4iO3M6ODoiRGVidWdLaXQiO3M6NToidGl0bGUiO047czoxMjoiZGlzYWJsZVRpbWVyIjtiOjE7fXM6NzoiaW5jbHVkZSI7YTo1OntzOjc6ImNvbnRlbnQiO2E6NDp7czo0OiJjb3JlIjthOjE6e3M6NToiT3RoZXIiO2E6NTM6e2k6MDtzOjE4OiJDT1JFL2Jvb3RzdHJhcC5waHAiO2k6MTtzOjE1OiJDT1JFL2Jhc2ljcy5waHAiO2k6MjtzOjE3OiJDT1JFL0NvcmVcQXBwLnBocCI7aTozO3M6MjU6IkNPUkUvRXJyb3JcZXhjZXB0aW9ucy5waHAiO2k6NDtzOjIzOiJDT1JFL0NvcmVcQ29uZmlndXJlLnBocCI7aTo1O3M6MjE6IkNPUkUvVXRpbGl0eVxIYXNoLnBocCI7aTo2O3M6MjA6IkNPUkUvQ2FjaGVcQ2FjaGUucGhwIjtpOjc7czozMjoiQ09SRS9DYWNoZVxFbmdpbmVcRmlsZUVuZ2luZS5waHAiO2k6ODtzOjI2OiJDT1JFL0NhY2hlXENhY2hlRW5naW5lLnBocCI7aTo5O3M6MjY6IkNPUkUvVXRpbGl0eVxJbmZsZWN0b3IucGhwIjtpOjEwO3M6Mjc6IkNPUkUvRXJyb3JcRXJyb3JIYW5kbGVyLnBocCI7aToxMTtzOjI0OiJDT1JFL0NvcmVcQ2FrZVBsdWdpbi5waHAiO2k6MTI7czoyMDoiQ09SRS9Mb2dcQ2FrZUxvZy5waHAiO2k6MTM7czozMjoiQ09SRS9Mb2dcTG9nRW5naW5lQ29sbGVjdGlvbi5waHAiO2k6MTQ7czozMzoiQ09SRS9VdGlsaXR5XE9iamVjdENvbGxlY3Rpb24ucGhwIjtpOjE1O3M6Mjc6IkNPUkUvTG9nXEVuZ2luZVxGaWxlTG9nLnBocCI7aToxNjtzOjI3OiJDT1JFL0xvZ1xFbmdpbmVcQmFzZUxvZy5waHAiO2k6MTc7czoyOToiQ09SRS9Mb2dcQ2FrZUxvZ0ludGVyZmFjZS5waHAiO2k6MTg7czozNzoiQ09SRS9Nb2RlbFxEYXRhc291cmNlXENha2VTZXNzaW9uLnBocCI7aToxOTtzOjI1OiJDT1JFL1V0aWxpdHlcRGVidWdnZXIucGhwIjtpOjIwO3M6MjM6IkNPUkUvVXRpbGl0eVxTdHJpbmcucGhwIjtpOjIxO3M6Mjc6IkNPUkUvUm91dGluZ1xEaXNwYXRjaGVyLnBocCI7aToyMjtzOjMyOiJDT1JFL0V2ZW50XENha2VFdmVudExpc3RlbmVyLnBocCI7aToyMztzOjI4OiJDT1JFL05ldHdvcmtcQ2FrZVJlcXVlc3QucGhwIjtpOjI0O3M6Mjk6IkNPUkUvTmV0d29ya1xDYWtlUmVzcG9uc2UucGhwIjtpOjI1O3M6MjQ6IkNPUkUvRXZlbnRcQ2FrZUV2ZW50LnBocCI7aToyNjtzOjMxOiJDT1JFL0V2ZW50XENha2VFdmVudE1hbmFnZXIucGhwIjtpOjI3O3M6Mzk6IkNPUkUvUm91dGluZ1xGaWx0ZXJcQXNzZXREaXNwYXRjaGVyLnBocCI7aToyODtzOjMzOiJDT1JFL1JvdXRpbmdcRGlzcGF0Y2hlckZpbHRlci5waHAiO2k6Mjk7czozOToiQ09SRS9Sb3V0aW5nXEZpbHRlclxDYWNoZURpc3BhdGNoZXIucGhwIjtpOjMwO3M6MjM6IkNPUkUvUm91dGluZ1xSb3V0ZXIucGhwIjtpOjMxO3M6MzI6IkNPUkUvUm91dGluZ1xSb3V0ZVxDYWtlUm91dGUucGhwIjtpOjMyO3M6MjI6IkNPUkUvQ29uZmlnXHJvdXRlcy5waHAiO2k6MzM7czozOToiQ09SRS9Sb3V0aW5nXFJvdXRlXFBsdWdpblNob3J0Um91dGUucGhwIjtpOjM0O3M6MzA6IkNPUkUvQ29udHJvbGxlclxDb250cm9sbGVyLnBocCI7aTozNTtzOjIwOiJDT1JFL0NvcmVcT2JqZWN0LnBocCI7aTozNjtzOjM5OiJDT1JFL0NvbnRyb2xsZXJcQ29tcG9uZW50Q29sbGVjdGlvbi5waHAiO2k6Mzc7czoyOToiQ09SRS9Db250cm9sbGVyXENvbXBvbmVudC5waHAiO2k6Mzg7czoxODoiQ09SRS9JMThuXEkxOG4ucGhwIjtpOjM5O3M6MTg6IkNPUkUvSTE4blxMMTBuLnBocCI7aTo0MDtzOjQ2OiJDT1JFL0NvbnRyb2xsZXJcQ29tcG9uZW50XFNlc3Npb25Db21wb25lbnQucGhwIjtpOjQxO3M6NDM6IkNPUkUvQ29udHJvbGxlclxDb21wb25lbnRcQXV0aENvbXBvbmVudC5waHAiO2k6NDI7czozMDoiQ09SRS9WaWV3XEhlbHBlckNvbGxlY3Rpb24ucGhwIjtpOjQzO3M6MzA6IkNPUkUvVXRpbGl0eVxDbGFzc1JlZ2lzdHJ5LnBocCI7aTo0NDtzOjIwOiJDT1JFL01vZGVsXE1vZGVsLnBocCI7aTo0NTtzOjMzOiJDT1JFL01vZGVsXEJlaGF2aW9yQ29sbGVjdGlvbi5waHAiO2k6NDY7czo0MzoiQ09SRS9Nb2RlbFxCZWhhdmlvclxDb250YWluYWJsZUJlaGF2aW9yLnBocCI7aTo0NztzOjI4OiJDT1JFL01vZGVsXE1vZGVsQmVoYXZpb3IucGhwIjtpOjQ4O3M6MzI6IkNPUkUvTW9kZWxcQ29ubmVjdGlvbk1hbmFnZXIucGhwIjtpOjQ5O3M6NDA6IkNPUkUvTW9kZWxcRGF0YXNvdXJjZVxEYXRhYmFzZVxNeXNxbC5waHAiO2k6NTA7czozNToiQ09SRS9Nb2RlbFxEYXRhc291cmNlXERib1NvdXJjZS5waHAiO2k6NTE7czozNjoiQ09SRS9Nb2RlbFxEYXRhc291cmNlXERhdGFTb3VyY2UucGhwIjtpOjUyO3M6MjI6IkNPUkUvQ29uZmlnXGNvbmZpZy5waHAiO319czozOiJhcHAiO2E6MTp7czo1OiJPdGhlciI7YToxMjp7aTowO3M6MjE6IkFQUC93ZWJyb290XGluZGV4LnBocCI7aToxO3M6MTk6IkFQUC9Db25maWdcY29yZS5waHAiO2k6MjtzOjI0OiJBUFAvQ29uZmlnXGJvb3RzdHJhcC5waHAiO2k6MztzOjIxOiJBUFAvQ29uZmlnXHJvdXRlcy5waHAiO2k6NDtzOjM0OiJBUFAvQ29udHJvbGxlclxUYXNrc0NvbnRyb2xsZXIucGhwIjtpOjU7czozMjoiQVBQL0NvbnRyb2xsZXJcQXBwQ29udHJvbGxlci5waHAiO2k6NjtzOjQyOiJBUFAvQ29udHJvbGxlclxDb21wb25lbnRcTmFtZUNvbXBvbmVudC5waHAiO2k6NztzOjQ3OiJBUFAvQ29udHJvbGxlclxDb21wb25lbnRcQmVuY2htYXJrQ29tcG9uZW50LnBocCI7aTo4O3M6MTg6IkFQUC9Nb2RlbFxUYXNrLnBocCI7aTo5O3M6MjI6IkFQUC9Nb2RlbFxBcHBNb2RlbC5waHAiO2k6MTA7czoyMzoiQVBQL0NvbmZpZ1xkYXRhYmFzZS5waHAiO2k6MTE7czoxODoiQVBQL01vZGVsXE5vdGUucGhwIjt9fXM6NzoicGx1Z2lucyI7YToxOntzOjg6IkRlYnVnS2l0IjthOjE6e3M6NToiT3RoZXIiO2E6MTQ6e2k6MDtzOjUwOiJEZWJ1Z0tpdC9Db250cm9sbGVyXENvbXBvbmVudFxUb29sYmFyQ29tcG9uZW50LnBocCI7aToxO3M6Mjg6IkRlYnVnS2l0L0xpYlxEZWJ1Z01lbW9yeS5waHAiO2k6MjtzOjM1OiJEZWJ1Z0tpdC9MaWJcUGFuZWxcSGlzdG9yeVBhbmVsLnBocCI7aTozO3M6Mjc6IkRlYnVnS2l0L0xpYlxEZWJ1Z1BhbmVsLnBocCI7aTo0O3M6MzU6IkRlYnVnS2l0L0xpYlxQYW5lbFxTZXNzaW9uUGFuZWwucGhwIjtpOjU7czozNToiRGVidWdLaXQvTGliXFBhbmVsXFJlcXVlc3RQYW5lbC5waHAiO2k6NjtzOjM0OiJEZWJ1Z0tpdC9MaWJcUGFuZWxcU3FsTG9nUGFuZWwucGhwIjtpOjc7czozMzoiRGVidWdLaXQvTGliXFBhbmVsXFRpbWVyUGFuZWwucGhwIjtpOjg7czozMToiRGVidWdLaXQvTGliXFBhbmVsXExvZ1BhbmVsLnBocCI7aTo5O3M6Mzk6IkRlYnVnS2l0L0xpYlxMb2dcRW5naW5lXERlYnVnS2l0TG9nLnBocCI7aToxMDtzOjM3OiJEZWJ1Z0tpdC9MaWJcUGFuZWxcVmFyaWFibGVzUGFuZWwucGhwIjtpOjExO3M6Mzk6IkRlYnVnS2l0L0xpYlxQYW5lbFxFbnZpcm9ubWVudFBhbmVsLnBocCI7aToxMjtzOjM1OiJEZWJ1Z0tpdC9MaWJcUGFuZWxcSW5jbHVkZVBhbmVsLnBocCI7aToxMztzOjI3OiJEZWJ1Z0tpdC9MaWJcRGVidWdUaW1lci5waHAiO319fXM6NToicGF0aHMiO2E6Mzp7aTowO3M6NDA6IkU6XFByb2dyYW1GaWxlc1x4YW1wcFxodGRvY3NcY2FrZXBocFxsaWIiO2k6MjtzOjMwOiJFOlxQcm9ncmFtRmlsZXNceGFtcHBccGhwXFBFQVIiO2k6MztzOjQ2OiJFOlxQcm9ncmFtRmlsZXNceGFtcHBcaHRkb2NzXGNha2VwaHBcbGliXENha2VcIjt9fXM6MTE6ImVsZW1lbnROYW1lIjtzOjEzOiJpbmNsdWRlX3BhbmVsIjtzOjY6InBsdWdpbiI7czo4OiJEZWJ1Z0tpdCI7czo1OiJ0aXRsZSI7TjtzOjEyOiJkaXNhYmxlVGltZXIiO2I6MTt9fXM6MjI6ImRlYnVnVG9vbGJhckphdmFzY3JpcHQiO2E6Mjp7czo2OiJqcXVlcnkiO3M6MTU6IkRlYnVnS2l0LmpxdWVyeSI7czo0OiJsaWJzIjtzOjI1OiJEZWJ1Z0tpdC5qc19kZWJ1Z190b29sYmFyIjt9czoxNToiZGVidWdUb29sYmFyQ3NzIjthOjE6e2k6MDtzOjI2OiJEZWJ1Z0tpdC5kZWJ1Z190b29sYmFyLmNzcyI7fXM6MTA6InRhc2tzX2RhdGEiO2E6Njp7aTowO2E6Mjp7czo0OiJUYXNrIjthOjc6e3M6MjoiaWQiO3M6MToiMiI7czo0OiJuYW1lIjtzOjI4OiJjYWtlcGhw44Gu44Kk44Oz44K544OI44O844OrIjtzOjQ6ImJvZHkiO3M6MjE6IueSsOWig+ioreWumuOCkuOBmeOCiyI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo4OiJkdWVfZGF0ZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDctMDYgMTc6NTI6MTQiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDctMDYgMTc6NTI6MTQiO31zOjQ6Ik5vdGUiO2E6Mzp7aTowO2E6NTp7czoyOiJpZCI7czoxOiIzIjtzOjc6InRhc2tfaWQiO3M6MToiMiI7czo0OiJib2R5IjtzOjE4OiLjg4Djgqbjg7Pjg63jg7zjg4kiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0wNy0xMyAxODozNDo1NiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0wNy0xMyAxODozNDo1NiI7fWk6MTthOjU6e3M6MjoiaWQiO3M6MToiNCI7czo3OiJ0YXNrX2lkIjtzOjE6IjIiO3M6NDoiYm9keSI7czo5OiLjgrPjg5Tjg7wiO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0wNy0xMyAxODozNToxNCI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0wNy0xMyAxODozNToxNCI7fWk6MjthOjU6e3M6MjoiaWQiO3M6MToiNiI7czo3OiJ0YXNrX2lkIjtzOjE6IjIiO3M6NDoiYm9keSI7czoxMjoiaW5p44Gu6Kit5a6aIjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDctMTMgMTg6MzY6MTMiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDctMTMgMTg6MzY6MTMiO319fWk6MTthOjI6e3M6NDoiVGFzayI7YTo3OntzOjI6ImlkIjtzOjI6IjEwIjtzOjQ6Im5hbWUiO3M6ODoibmV3VGFzazIiO3M6NDoiYm9keSI7czoxMzoiOC8xNyBubzIgdGFzayI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo4OiJkdWVfZGF0ZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMDgtMTcgMjA6MjI6MDgiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMDgtMTcgMjA6MjI6MDgiO31zOjQ6Ik5vdGUiO2E6MDp7fX1pOjI7YToyOntzOjQ6IlRhc2siO2E6Nzp7czoyOiJpZCI7czoyOiIxMiI7czo0OiJuYW1lIjtzOjg6Im5ld1Rhc2szIjtzOjQ6ImJvZHkiO3M6MTM6IjgvMTcgbm8zIHRhc2siO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6ODoiZHVlX2RhdGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTA4LTE3IDIwOjMxOjAwIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTA4LTE3IDIwOjMxOjAwIjt9czo0OiJOb3RlIjthOjA6e319aTozO2E6Mjp7czo0OiJUYXNrIjthOjc6e3M6MjoiaWQiO3M6MToiNCI7czo0OiJuYW1lIjtzOjE4OiLjg57jgqbjgrnjga7mjoPpmaQiO3M6NDoiYm9keSI7czoyNDoi44Oe44Km44K544KS5o6D6Zmk44GZ44KLIjtzOjY6InN0YXR1cyI7czoxOiIwIjtzOjg6ImR1ZV9kYXRlIjtOO3M6NzoiY3JlYXRlZCI7czoxOToiMjAxMy0wNy0yMCAyMDoyMToxNiI7czo4OiJtb2RpZmllZCI7czoxOToiMjAxMy0wNy0yMCAyMDoyMToxNiI7fXM6NDoiTm90ZSI7YToxOntpOjA7YTo1OntzOjI6ImlkIjtzOjE6IjciO3M6NzoidGFza19pZCI7czoxOiI0IjtzOjQ6ImJvZHkiO3M6MTg6IuOBiuaOg+mZpOWujOS6huOBiyI7czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTEwLTA1IDE3OjQxOjQ0IjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTEwLTA1IDE3OjQxOjQ0Ijt9fX1pOjQ7YToyOntzOjQ6IlRhc2siO2E6Nzp7czoyOiJpZCI7czoxOiIzIjtzOjQ6Im5hbWUiO3M6MzA6IuaWsOimj+WFpeWKm+OBi+OCieOBruOCv+OCueOCryI7czo0OiJib2R5IjtzOjM5OiLmlrDopo/lhaXlipvjgYvjgonjga7jgr/jgrnjgq/jga7oqbPntLAiO3M6Njoic3RhdHVzIjtzOjE6IjAiO3M6ODoiZHVlX2RhdGUiO047czo3OiJjcmVhdGVkIjtzOjE5OiIyMDEzLTA3LTA2IDE5OjUwOjMwIjtzOjg6Im1vZGlmaWVkIjtzOjE5OiIyMDEzLTA3LTEzIDIxOjA4OjMxIjt9czo0OiJOb3RlIjthOjA6e319aTo1O2E6Mjp7czo0OiJUYXNrIjthOjc6e3M6MjoiaWQiO3M6MjoiMTMiO3M6NDoibmFtZSI7czoxMjoi6KiI5ris44GZ44KLIjtzOjQ6ImJvZHkiO3M6Mzk6IkJlbmNobWFya+OCs+ODs+ODneODvOODjeODs+ODiOOBruS9nOaIkCI7czo2OiJzdGF0dXMiO3M6MToiMCI7czo4OiJkdWVfZGF0ZSI7TjtzOjc6ImNyZWF0ZWQiO3M6MTk6IjIwMTMtMTAtMTkgMTc6MzY6MDEiO3M6ODoibW9kaWZpZWQiO3M6MTk6IjIwMTMtMTAtMTkgMTc6MzY6MDEiO31zOjQ6Ik5vdGUiO2E6MDp7fX19czoxODoiY29udGVudF9mb3JfbGF5b3V0IjtzOjUxOTE6IjwhLS0gYXBwL1ZpZXcvVGFza3MvaW5kZXguY3RwIC0tPg0KDQo8cD7imIXimIXjgIDjgr/jgrnjgq/nrqHnkIbjgrfjgrnjg4bjg6DjgIDimIXimIUgPGEgaHJlZj0iL2Nha2VwaHAvVGFza3MvYWxsIj7lhajjgr/jgrnjgq88L2E+IDxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2NyZWF0ZSI+5paw6KaP44K/44K544KvPC9hPiA8YSBocmVmPSIvY2FrZXBocC9Vc2Vycy9sb2dvdXQiPuODreOCsOOCouOCpuODiDwvYT48YnI+YWFh44GV44KT44CB44GE44KJ44Gj44GX44KD44GEPC9wPgkNCjxoMz425Lu244Gu44K/44K544Kv44GM5pyq5a6M5LqG44Gn44GZPC9oMz4NCjwhLS0gYXBwL1ZpZXcvRWxlbWVudC90YXNrLmN0cCAtLT4NCjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii9jYWtlcGhwL2Nzcy90YXNrLmNzcyIgLz4NCjxkaXYgY2xhc3M9InJvdW5kQm94Ij4NCgk8aDM+DQoJCTIJCTpjYWtlcGhw44Gu44Kk44Oz44K544OI44O844OrCTwvaDM+DQoJ5L2c5oiQ5pelMjAxMy0wNy0wNiAxNzo1MjoxNAk8cCBjbGFzcz0iY29tbWVudCI+DQoJCTx1bD4NCgkJCQkJCQk8bGk+44OA44Km44Oz44Ot44O844OJPC9saT4NCgkJCQkJCQk8bGk+44Kz44OU44O8PC9saT4NCgkJCQkJCQk8bGk+aW5p44Gu6Kit5a6aPC9saT4NCgkJCQkJCTxsaT48YSBocmVmPSIvY2FrZXBocC9Ob3Rlcy9jcmVhdGUiPuOCs+ODoeODs+ODiOOCkui/veWKoDwvYT48L2xpPg0KCQk8L3VsPg0KCTwvcD4JDQoJPGEgaHJlZj0iL2Nha2VwaHAvVGFza3MvZWRpdC8yIiBjbGFzcz0iYnV0dG9uIGxlZnQiPue3qOmbhjwvYT4JPGEgaHJlZj0iL2Nha2VwaHAvVGFza3MvZG9uZS8yIiBjbGFzcz0iYnV0dG9uIHJpZ2h0Ij7jgZPjga7jgr/jgrnjgq/jgpLlrozkuobjgZnjgos8L2E+PC9kaXY+PCEtLSBhcHAvVmlldy9FbGVtZW50L3Rhc2suY3RwIC0tPg0KPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iL2Nha2VwaHAvY3NzL3Rhc2suY3NzIiAvPg0KPGRpdiBjbGFzcz0icm91bmRCb3giPg0KCTxoMz4NCgkJMTAJCTpuZXdUYXNrMgk8L2gzPg0KCeS9nOaIkOaXpTIwMTMtMDgtMTcgMjA6MjI6MDgJPHAgY2xhc3M9ImNvbW1lbnQiPg0KCQk8dWw+DQoJCQkJCQk8bGk+PGEgaHJlZj0iL2Nha2VwaHAvTm90ZXMvY3JlYXRlIj7jgrPjg6Hjg7Pjg4jjgpLov73liqA8L2E+PC9saT4NCgkJPC91bD4NCgk8L3A+CQ0KCTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2VkaXQvMTAiIGNsYXNzPSJidXR0b24gbGVmdCI+57eo6ZuGPC9hPgk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzEwIiBjbGFzcz0iYnV0dG9uIHJpZ2h0Ij7jgZPjga7jgr/jgrnjgq/jgpLlrozkuobjgZnjgos8L2E+PC9kaXY+PCEtLSBhcHAvVmlldy9FbGVtZW50L3Rhc2suY3RwIC0tPg0KPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iL2Nha2VwaHAvY3NzL3Rhc2suY3NzIiAvPg0KPGRpdiBjbGFzcz0icm91bmRCb3giPg0KCTxoMz4NCgkJMTIJCTpuZXdUYXNrMwk8L2gzPg0KCeS9nOaIkOaXpTIwMTMtMDgtMTcgMjA6MzE6MDAJPHAgY2xhc3M9ImNvbW1lbnQiPg0KCQk8dWw+DQoJCQkJCQk8bGk+PGEgaHJlZj0iL2Nha2VwaHAvTm90ZXMvY3JlYXRlIj7jgrPjg6Hjg7Pjg4jjgpLov73liqA8L2E+PC9saT4NCgkJPC91bD4NCgk8L3A+CQ0KCTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2VkaXQvMTIiIGNsYXNzPSJidXR0b24gbGVmdCI+57eo6ZuGPC9hPgk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzEyIiBjbGFzcz0iYnV0dG9uIHJpZ2h0Ij7jgZPjga7jgr/jgrnjgq/jgpLlrozkuobjgZnjgos8L2E+PC9kaXY+PCEtLSBhcHAvVmlldy9FbGVtZW50L3Rhc2suY3RwIC0tPg0KPGxpbmsgcmVsPSJzdHlsZXNoZWV0IiB0eXBlPSJ0ZXh0L2NzcyIgaHJlZj0iL2Nha2VwaHAvY3NzL3Rhc2suY3NzIiAvPg0KPGRpdiBjbGFzcz0icm91bmRCb3giPg0KCTxoMz4NCgkJNAkJOuODnuOCpuOCueOBruaOg+mZpAk8L2gzPg0KCeS9nOaIkOaXpTIwMTMtMDctMjAgMjA6MjE6MTYJPHAgY2xhc3M9ImNvbW1lbnQiPg0KCQk8dWw+DQoJCQkJCQkJPGxpPuOBiuaOg+mZpOWujOS6huOBizwvbGk+DQoJCQkJCQk8bGk+PGEgaHJlZj0iL2Nha2VwaHAvTm90ZXMvY3JlYXRlIj7jgrPjg6Hjg7Pjg4jjgpLov73liqA8L2E+PC9saT4NCgkJPC91bD4NCgk8L3A+CQ0KCTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2VkaXQvNCIgY2xhc3M9ImJ1dHRvbiBsZWZ0Ij7nt6jpm4Y8L2E+CTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2RvbmUvNCIgY2xhc3M9ImJ1dHRvbiByaWdodCI+44GT44Gu44K/44K544Kv44KS5a6M5LqG44GZ44KLPC9hPjwvZGl2PjwhLS0gYXBwL1ZpZXcvRWxlbWVudC90YXNrLmN0cCAtLT4NCjxsaW5rIHJlbD0ic3R5bGVzaGVldCIgdHlwZT0idGV4dC9jc3MiIGhyZWY9Ii9jYWtlcGhwL2Nzcy90YXNrLmNzcyIgLz4NCjxkaXYgY2xhc3M9InJvdW5kQm94Ij4NCgk8aDM+DQoJCTMJCTrmlrDopo/lhaXlipvjgYvjgonjga7jgr/jgrnjgq8JPC9oMz4NCgnkvZzmiJDml6UyMDEzLTA3LTA2IDE5OjUwOjMwCTxwIGNsYXNzPSJjb21tZW50Ij4NCgkJPHVsPg0KCQkJCQkJPGxpPjxhIGhyZWY9Ii9jYWtlcGhwL05vdGVzL2NyZWF0ZSI+44Kz44Oh44Oz44OI44KS6L+95YqgPC9hPjwvbGk+DQoJCTwvdWw+DQoJPC9wPgkNCgk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9lZGl0LzMiIGNsYXNzPSJidXR0b24gbGVmdCI+57eo6ZuGPC9hPgk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzMiIGNsYXNzPSJidXR0b24gcmlnaHQiPuOBk+OBruOCv+OCueOCr+OCkuWujOS6huOBmeOCizwvYT48L2Rpdj48IS0tIGFwcC9WaWV3L0VsZW1lbnQvdGFzay5jdHAgLS0+DQo8bGluayByZWw9InN0eWxlc2hlZXQiIHR5cGU9InRleHQvY3NzIiBocmVmPSIvY2FrZXBocC9jc3MvdGFzay5jc3MiIC8+DQo8ZGl2IGNsYXNzPSJyb3VuZEJveCI+DQoJPGgzPg0KCQkxMwkJOuioiOa4rOOBmeOCiwk8L2gzPg0KCeS9nOaIkOaXpTIwMTMtMTAtMTkgMTc6MzY6MDEJPHAgY2xhc3M9ImNvbW1lbnQiPg0KCQk8dWw+DQoJCQkJCQk8bGk+PGEgaHJlZj0iL2Nha2VwaHAvTm90ZXMvY3JlYXRlIj7jgrPjg6Hjg7Pjg4jjgpLov73liqA8L2E+PC9saT4NCgkJPC91bD4NCgk8L3A+CQ0KCTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2VkaXQvMTMiIGNsYXNzPSJidXR0b24gbGVmdCI+57eo6ZuGPC9hPgk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzEzIiBjbGFzcz0iYnV0dG9uIHJpZ2h0Ij7jgZPjga7jgr/jgrnjgq/jgpLlrozkuobjgZnjgos8L2E+PC9kaXY+DQo8IS0tDQo8dGFibGU+DQoJPHRyPg0KCQk8dGg+SUQ8L3RoPg0KCQk8dGg+5ZCN5YmNPC90aD4NCgkJPHRoPuacn+mZkOaXpTwvdGg+DQoJCTx0aD7kvZzmiJDml6U8L3RoPg0KCQk8dGg+5pON5L2cPC90aD4NCgk8L3RyPg0KCTx0cj4NCgkJPHRkPg0KCQk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy92aWV3LzIiPjI8L2E+CQk8L3RkPg0KCQk8dGQ+Y2FrZXBocOOBruOCpOODs+OCueODiOODvOODqzxici8+DQoJCQk8dWw+DQoJCQkJCQkJCQk8bGk+44OA44Km44Oz44Ot44O844OJPC9saT4NCgkJCQkJCQkJCTxsaT7jgrPjg5Tjg7w8L2xpPg0KCQkJCQkJCQkJPGxpPmluaeOBruioreWumjwvbGk+DQoJCQkJCQkJPC91bD4NCgkJPC90ZD4NCgkJPHRkPjwvdGQ+DQoJCTx0ZD4yMDEzLTA3LTA2IDE3OjUyOjE0PC90ZD4NCgkJPHRkPg0KCQk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzIiPuOBk+OBruOCv+OCueOCr+OCkuWujOS6huOBmeOCizwvYT4JCTwvdGQ+DQoJPC90cj4NCgk8dHI+DQoJCTx0ZD4NCgkJPGEgaHJlZj0iL2Nha2VwaHAvVGFza3Mvdmlldy8xMCI+MTA8L2E+CQk8L3RkPg0KCQk8dGQ+bmV3VGFzazI8YnIvPg0KCQkJPHVsPg0KCQkJCQkJCTwvdWw+DQoJCTwvdGQ+DQoJCTx0ZD48L3RkPg0KCQk8dGQ+MjAxMy0wOC0xNyAyMDoyMjowODwvdGQ+DQoJCTx0ZD4NCgkJPGEgaHJlZj0iL2Nha2VwaHAvVGFza3MvZG9uZS8xMCI+44GT44Gu44K/44K544Kv44KS5a6M5LqG44GZ44KLPC9hPgkJPC90ZD4NCgk8L3RyPg0KCTx0cj4NCgkJPHRkPg0KCQk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy92aWV3LzEyIj4xMjwvYT4JCTwvdGQ+DQoJCTx0ZD5uZXdUYXNrMzxici8+DQoJCQk8dWw+DQoJCQkJCQkJPC91bD4NCgkJPC90ZD4NCgkJPHRkPjwvdGQ+DQoJCTx0ZD4yMDEzLTA4LTE3IDIwOjMxOjAwPC90ZD4NCgkJPHRkPg0KCQk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzEyIj7jgZPjga7jgr/jgrnjgq/jgpLlrozkuobjgZnjgos8L2E+CQk8L3RkPg0KCTwvdHI+DQoJPHRyPg0KCQk8dGQ+DQoJCTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL3ZpZXcvNCI+NDwvYT4JCTwvdGQ+DQoJCTx0ZD7jg57jgqbjgrnjga7mjoPpmaQ8YnIvPg0KCQkJPHVsPg0KCQkJCQkJCQkJPGxpPuOBiuaOg+mZpOWujOS6huOBizwvbGk+DQoJCQkJCQkJPC91bD4NCgkJPC90ZD4NCgkJPHRkPjwvdGQ+DQoJCTx0ZD4yMDEzLTA3LTIwIDIwOjIxOjE2PC90ZD4NCgkJPHRkPg0KCQk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzQiPuOBk+OBruOCv+OCueOCr+OCkuWujOS6huOBmeOCizwvYT4JCTwvdGQ+DQoJPC90cj4NCgk8dHI+DQoJCTx0ZD4NCgkJPGEgaHJlZj0iL2Nha2VwaHAvVGFza3Mvdmlldy8zIj4zPC9hPgkJPC90ZD4NCgkJPHRkPuaWsOimj+WFpeWKm+OBi+OCieOBruOCv+OCueOCrzxici8+DQoJCQk8dWw+DQoJCQkJCQkJPC91bD4NCgkJPC90ZD4NCgkJPHRkPjwvdGQ+DQoJCTx0ZD4yMDEzLTA3LTA2IDE5OjUwOjMwPC90ZD4NCgkJPHRkPg0KCQk8YSBocmVmPSIvY2FrZXBocC9UYXNrcy9kb25lLzMiPuOBk+OBruOCv+OCueOCr+OCkuWujOS6huOBmeOCizwvYT4JCTwvdGQ+DQoJPC90cj4NCgk8dHI+DQoJCTx0ZD4NCgkJPGEgaHJlZj0iL2Nha2VwaHAvVGFza3Mvdmlldy8xMyI+MTM8L2E+CQk8L3RkPg0KCQk8dGQ+6KiI5ris44GZ44KLPGJyLz4NCgkJCTx1bD4NCgkJCQkJCQk8L3VsPg0KCQk8L3RkPg0KCQk8dGQ+PC90ZD4NCgkJPHRkPjIwMTMtMTAtMTkgMTc6MzY6MDE8L3RkPg0KCQk8dGQ+DQoJCTxhIGhyZWY9Ii9jYWtlcGhwL1Rhc2tzL2RvbmUvMTMiPuOBk+OBruOCv+OCueOCr+OCkuWujOS6huOBmeOCizwvYT4JCTwvdGQ+DQoJPC90cj4NCjwvdGFibGU+DQotLT4iO3M6MTg6InNjcmlwdHNfZm9yX2xheW91dCI7czowOiIiO3M6MTY6InRpdGxlX2Zvcl9sYXlvdXQiO3M6NToiVGFza3MiO30='));
				Router::setRequestInfo($controller->request);
				$this->request = $request;
				$this->viewVars = $controller->viewVars;
				$this->loadHelpers();
				extract($this->viewVars, EXTR_SKIP);
		?><!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />	<title>
		CakePHP: the rapid development php framework:
		Tasks	</title>
	<link href="/cakephp/favicon.ico" type="image/x-icon" rel="icon" /><link href="/cakephp/favicon.ico" type="image/x-icon" rel="shortcut icon" /><link rel="stylesheet" type="text/css" href="/cakephp/css/cake.generic.css" /></head>
<body>
	<div id="container">
		<div id="header">
			<h1><a href="http://cakephp.org">CakePHP: the rapid development php framework</a></h1>
		</div>
		<div id="content">

			
			<!-- app/View/Tasks/index.ctp -->

<p>★★　タスク管理システム　★★ <a href="/cakephp/Tasks/all">全タスク</a> <a href="/cakephp/Tasks/create">新規タスク</a> <a href="/cakephp/Users/logout">ログアウト</a><br>aaaさん、いらっしゃい</p>	
<h3>6件のタスクが未完了です</h3>
<!-- app/View/Element/task.ctp -->
<link rel="stylesheet" type="text/css" href="/cakephp/css/task.css" />
<div class="roundBox">
	<h3>
		2		:cakephpのインストール	</h3>
	作成日2013-07-06 17:52:14	<p class="comment">
		<ul>
							<li>ダウンロード</li>
							<li>コピー</li>
							<li>iniの設定</li>
						<li><a href="/cakephp/Notes/create">コメントを追加</a></li>
		</ul>
	</p>	
	<a href="/cakephp/Tasks/edit/2" class="button left">編集</a>	<a href="/cakephp/Tasks/done/2" class="button right">このタスクを完了する</a></div><!-- app/View/Element/task.ctp -->
<link rel="stylesheet" type="text/css" href="/cakephp/css/task.css" />
<div class="roundBox">
	<h3>
		10		:newTask2	</h3>
	作成日2013-08-17 20:22:08	<p class="comment">
		<ul>
						<li><a href="/cakephp/Notes/create">コメントを追加</a></li>
		</ul>
	</p>	
	<a href="/cakephp/Tasks/edit/10" class="button left">編集</a>	<a href="/cakephp/Tasks/done/10" class="button right">このタスクを完了する</a></div><!-- app/View/Element/task.ctp -->
<link rel="stylesheet" type="text/css" href="/cakephp/css/task.css" />
<div class="roundBox">
	<h3>
		12		:newTask3	</h3>
	作成日2013-08-17 20:31:00	<p class="comment">
		<ul>
						<li><a href="/cakephp/Notes/create">コメントを追加</a></li>
		</ul>
	</p>	
	<a href="/cakephp/Tasks/edit/12" class="button left">編集</a>	<a href="/cakephp/Tasks/done/12" class="button right">このタスクを完了する</a></div><!-- app/View/Element/task.ctp -->
<link rel="stylesheet" type="text/css" href="/cakephp/css/task.css" />
<div class="roundBox">
	<h3>
		4		:マウスの掃除	</h3>
	作成日2013-07-20 20:21:16	<p class="comment">
		<ul>
							<li>お掃除完了か</li>
						<li><a href="/cakephp/Notes/create">コメントを追加</a></li>
		</ul>
	</p>	
	<a href="/cakephp/Tasks/edit/4" class="button left">編集</a>	<a href="/cakephp/Tasks/done/4" class="button right">このタスクを完了する</a></div><!-- app/View/Element/task.ctp -->
<link rel="stylesheet" type="text/css" href="/cakephp/css/task.css" />
<div class="roundBox">
	<h3>
		3		:新規入力からのタスク	</h3>
	作成日2013-07-06 19:50:30	<p class="comment">
		<ul>
						<li><a href="/cakephp/Notes/create">コメントを追加</a></li>
		</ul>
	</p>	
	<a href="/cakephp/Tasks/edit/3" class="button left">編集</a>	<a href="/cakephp/Tasks/done/3" class="button right">このタスクを完了する</a></div><!-- app/View/Element/task.ctp -->
<link rel="stylesheet" type="text/css" href="/cakephp/css/task.css" />
<div class="roundBox">
	<h3>
		13		:計測する	</h3>
	作成日2013-10-19 17:36:01	<p class="comment">
		<ul>
						<li><a href="/cakephp/Notes/create">コメントを追加</a></li>
		</ul>
	</p>	
	<a href="/cakephp/Tasks/edit/13" class="button left">編集</a>	<a href="/cakephp/Tasks/done/13" class="button right">このタスクを完了する</a></div>
<!--
<table>
	<tr>
		<th>ID</th>
		<th>名前</th>
		<th>期限日</th>
		<th>作成日</th>
		<th>操作</th>
	</tr>
	<tr>
		<td>
		<a href="/cakephp/Tasks/view/2">2</a>		</td>
		<td>cakephpのインストール<br/>
			<ul>
									<li>ダウンロード</li>
									<li>コピー</li>
									<li>iniの設定</li>
							</ul>
		</td>
		<td></td>
		<td>2013-07-06 17:52:14</td>
		<td>
		<a href="/cakephp/Tasks/done/2">このタスクを完了する</a>		</td>
	</tr>
	<tr>
		<td>
		<a href="/cakephp/Tasks/view/10">10</a>		</td>
		<td>newTask2<br/>
			<ul>
							</ul>
		</td>
		<td></td>
		<td>2013-08-17 20:22:08</td>
		<td>
		<a href="/cakephp/Tasks/done/10">このタスクを完了する</a>		</td>
	</tr>
	<tr>
		<td>
		<a href="/cakephp/Tasks/view/12">12</a>		</td>
		<td>newTask3<br/>
			<ul>
							</ul>
		</td>
		<td></td>
		<td>2013-08-17 20:31:00</td>
		<td>
		<a href="/cakephp/Tasks/done/12">このタスクを完了する</a>		</td>
	</tr>
	<tr>
		<td>
		<a href="/cakephp/Tasks/view/4">4</a>		</td>
		<td>マウスの掃除<br/>
			<ul>
									<li>お掃除完了か</li>
							</ul>
		</td>
		<td></td>
		<td>2013-07-20 20:21:16</td>
		<td>
		<a href="/cakephp/Tasks/done/4">このタスクを完了する</a>		</td>
	</tr>
	<tr>
		<td>
		<a href="/cakephp/Tasks/view/3">3</a>		</td>
		<td>新規入力からのタスク<br/>
			<ul>
							</ul>
		</td>
		<td></td>
		<td>2013-07-06 19:50:30</td>
		<td>
		<a href="/cakephp/Tasks/done/3">このタスクを完了する</a>		</td>
	</tr>
	<tr>
		<td>
		<a href="/cakephp/Tasks/view/13">13</a>		</td>
		<td>計測する<br/>
			<ul>
							</ul>
		</td>
		<td></td>
		<td>2013-10-19 17:36:01</td>
		<td>
		<a href="/cakephp/Tasks/done/13">このタスクを完了する</a>		</td>
	</tr>
</table>
-->		</div>
		<div id="footer">
			<a href="http://www.cakephp.org/" target="_blank"><img src="/cakephp/img/cake.power.gif" alt="CakePHP: the rapid development php framework" border="0" /></a>		</div>
	</div>
	<table class="cake-sql-log" id="cakeSqlLog_138218094452626850944a54_59038620" summary="Cake SQL Log" cellspacing="0"><caption>(default) 2 queries took 2 ms</caption>	<thead>
		<tr><th>Nr</th><th>Query</th><th>Error</th><th>Affected</th><th>Num. rows</th><th>Took (ms)</th></tr>
	</thead>
	<tbody>
	<tr><td>1</td><td>SELECT `Task`.`id`, `Task`.`name`, `Task`.`body`, `Task`.`status`, `Task`.`due_date`, `Task`.`created`, `Task`.`modified` FROM `cake`.`tasks` AS `Task`   WHERE `status` = 0</td><td></td><td style = "text-align: right">6</td><td style = "text-align: right">6</td><td style = "text-align: right">1</td></tr>
<tr><td>2</td><td>SELECT `Note`.`id`, `Note`.`task_id`, `Note`.`body`, `Note`.`created`, `Note`.`modified` FROM `cake`.`notes` AS `Note`   WHERE `Note`.`task_id` IN (2, 3, 4, 10, 12, 13)   </td><td></td><td style = "text-align: right">4</td><td style = "text-align: right">4</td><td style = "text-align: right">1</td></tr>
	</tbody></table>
	</body>
</html>
