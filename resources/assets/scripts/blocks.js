import { registerBlockType } from '@wordpress/blocks'

const blocks = [
  require('./blocks/header'),
]

for(let block of blocks) {
  registerBlockType(block.name, block.options)
}
