<?php

function set_active($path)
{
	return Request::is($path) ? 'current-page' : '';
}